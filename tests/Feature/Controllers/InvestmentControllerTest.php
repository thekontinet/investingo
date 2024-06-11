<?php

use App\Models\Investment;
use App\Models\Plan;
use App\Models\User;

use function Pest\Laravel\assertDatabaseEmpty;
use function Pest\Laravel\assertDatabaseHas;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertTrue;

test('can open investment', function () {
    $user = User::factory()->create();
    $plan = Plan::factory()->create([
        'min_deposit' => 0,
        'max_deposit' => 100,
        'terms_days' => 30,
        'daily_interest' => 1.5,
    ]);

    $user->wallet->deposit(1000);

    $this->actingAs($user)->post(route('invest.store', [
        'plan_id' => $plan->id,
        'amount' => 100,
        'agree' => true,
    ]))->assertRedirect(route('invest.show', 1));

    assertDatabaseHas(Investment::class, [
        'plan_id' => $plan->id,
        'amount' => 100,
    ]);
});

test('can debit user when new investment is opened', function () {
    $user = User::factory()->create();
    $plan = Plan::factory()->create([
        'min_deposit' => 0,
        'max_deposit' => 100,
        'terms_days' => 30,
        'daily_interest' => 1.5,
    ]);

    $user->wallet->deposit(1000);

    $this->actingAs($user)->post(route('invest.store', [
        'plan_id' => $plan->id,
        'amount' => 100,
        'agree' => true,
    ]));

    assertEquals($user->wallet->balance, 900);
});

test('cannot open investment with low balance', function () {
    $user = User::factory()->create();
    $plan = Plan::factory()->create([
        'min_deposit' => 0,
        'max_deposit' => 100,
        'terms_days' => 30,
        'daily_interest' => 1.5,
    ]);

    $this->actingAs($user)->post(route('invest.store', [
        'plan_id' => $plan->id,
        'amount' => 100,
        'agree' => true,
    ]))->assertSessionHasErrors('amount');

    assertDatabaseEmpty(Investment::class);
});

test('can withdraw investment', function () {
    $user = User::factory()->create();
    $plan = Plan::factory()->create([
        'min_deposit' => 0,
        'max_deposit' => 100,
        'terms_days' => 30,
        'daily_interest' => 1.5,
    ]);

    $investment = Investment::open(100, $plan, $user);
    $investment->close();

    $user->wallet->deposit(1000);

    $this->actingAs($user)->post(route('invest.withdraw', $investment))
        ->assertSessionHas('message');

    assertTrue($investment->refresh()->settled);
});

test('cannot withdraw investment when investment is open', function () {
    $user = User::factory()->create();
    $plan = Plan::factory()->create([
        'min_deposit' => 0,
        'max_deposit' => 100,
        'terms_days' => 30,
        'daily_interest' => 1.5,
    ]);

    $user->wallet->deposit(1000);
    $investment = Investment::open(100, $plan, $user);

    $this->actingAs($user)->post(route('invest.withdraw', $investment))
        ->assertSessionHas('error');

    assertFalse($investment->refresh()->settled);
});

test('a pending credit transaction is created when an investment is withdrawn', function () {
    $user = User::factory()->create();
    $plan = Plan::factory()->create([
        'min_deposit' => 0,
        'max_deposit' => 100,
        'terms_days' => 30,
        'daily_interest' => 1.5,
    ]);
    $user->wallet->deposit(1000);

    $investmentService = app(\App\Services\InvestmentService::class);
    $investment = $investmentService->openNewInvestment($user, $plan, 100);
    $investment->close();
    $investment->update(['profit' => 10]);
    $this->actingAs($user)->post(route('invest.withdraw', $investment));

    $expectedBalance = 900;
    $withdrawAmount = 110;

    assertEquals($expectedBalance, $user->wallet->balance);
    assertDatabaseHas(\App\Models\Transaction::class, [
        'confirmed' => false,
        'amount' => $withdrawAmount,
    ]);
});

test('cannot withdraw investment when investment pause state is false', function () {
    $user = User::factory()->create();
    $plan = Plan::factory()->create([
        'min_deposit' => 0,
        'max_deposit' => 100,
        'terms_days' => 30,
        'daily_interest' => 1.5,
    ]);

    $user->wallet->deposit(1000);
    $investment = Investment::open(100, $plan, $user);
    $investment->close();
    $investment->update(['paused' => false]);

    $this->actingAs($user)->post(route('invest.withdraw', $investment))
        ->assertSessionHas('error');

    assertFalse($investment->refresh()->settled);
});

test('cannot withdraw investment if settled', function () {
    $user = User::factory()->create();
    $plan = Plan::factory()->create([
        'min_deposit' => 0,
        'max_deposit' => 100,
        'terms_days' => 30,
        'daily_interest' => 1.5,
    ]);

    $investment = Investment::open(100, $plan, $user);
    $investment->close();
    $investment->withdraw();

    $this->actingAs($user)->post(route('invest.withdraw', $investment))
        ->assertSessionHas('error');
});

test('can close investment', function () {
    $user = User::factory()->create();
    $plan = Plan::factory()->create([
        'min_deposit' => 0,
        'max_deposit' => 100,
        'terms_days' => 30,
        'daily_interest' => 1.5,
    ]);

    $investment = Investment::open(100, $plan, $user);

    $user->wallet->deposit(1000);

    $this->actingAs($user)->post(route('invest.destroy', $investment))
        ->assertSessionHas('message');
});

test('can refund capital when user close investment', function () {
    $user = User::factory()->create();
    $plan = Plan::factory()->create([
        'min_deposit' => 0,
        'max_deposit' => 100,
        'terms_days' => 30,
        'daily_interest' => 1.5,
    ]);

    $investment = Investment::open(100, $plan, $user);

    $this->actingAs($user)->post(route('invest.destroy', $investment));

    assertEquals($user->wallet->balance, 100);
});

test('cannot close investment if approved', function () {
    $user = User::factory()->create();
    $plan = Plan::factory()->create([
        'min_deposit' => 0,
        'max_deposit' => 100,
        'terms_days' => 30,
        'daily_interest' => 1.5,
    ]);

    $investment = Investment::open(100, $plan, $user);
    $investment->approve();

    $this->actingAs($user)->post(route('invest.destroy', $investment))
        ->assertSessionHas('error');
});
