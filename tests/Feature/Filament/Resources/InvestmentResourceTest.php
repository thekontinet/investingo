<?php

use App\Filament\Resources\InvestmentResource\Pages\ListInvestments;
use App\Models\Investment;
use App\Models\Plan;
use App\Models\User;

use function Pest\Livewire\livewire;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertTrue;

test('can approve investment', function () {
    $user = User::factory()->create();
    $plan = Plan::factory()->create([
        'min_deposit' => 0,
        'max_deposit' => 100,
        'terms_days' => 30,
        'daily_interest' => 1.5,
    ]);

    $investment = Investment::open(100, $plan, $user);

    livewire(ListInvestments::class)->callTableAction('approve', $investment);

    assertTrue($investment->refresh()->approved());
});

test('hide approve action if investment is approved', function () {
    $user = User::factory()->create();
    $plan = Plan::factory()->create([
        'min_deposit' => 0,
        'max_deposit' => 100,
        'terms_days' => 30,
        'daily_interest' => 1.5,
    ]);

    $investment = Investment::open(100, $plan, $user);
    $investment->approve();

    livewire(ListInvestments::class)->assertTableActionHidden('approve', $investment);
});

test('can reset investment', function () {
    $user = User::factory()->create();
    $plan = Plan::factory()->create([
        'min_deposit' => 0,
        'max_deposit' => 100,
        'terms_days' => 30,
        'daily_interest' => 1.5,
    ]);

    $investment = Investment::open(100, $plan, $user);
    $investment->approve();

    livewire(ListInvestments::class)->callTableAction('reset', $investment);

    assertFalse($investment->refresh()->approved());
});

test('hide reset action if investment is not approved', function () {
    $user = User::factory()->create();
    $plan = Plan::factory()->create([
        'min_deposit' => 0,
        'max_deposit' => 100,
        'terms_days' => 30,
        'daily_interest' => 1.5,
    ]);

    $investment = Investment::open(100, $plan, $user);

    livewire(ListInvestments::class)->assertTableActionHidden('reset', $investment);
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
    $investment->approve();

    livewire(ListInvestments::class)->callTableAction('close', $investment);

    assertTrue($investment->refresh()->closed());
});

test('hide close action if investment is not approved', function () {
    $user = User::factory()->create();
    $plan = Plan::factory()->create([
        'min_deposit' => 0,
        'max_deposit' => 100,
        'terms_days' => 30,
        'daily_interest' => 1.5,
    ]);

    $investment = Investment::open(100, $plan, $user);

    livewire(ListInvestments::class)->assertTableActionHidden('close', $investment);
});
