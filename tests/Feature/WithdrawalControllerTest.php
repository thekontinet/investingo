<?php

use App\Models\PaymentMethod;
use App\Models\User;

use function Pest\Laravel\actingAs;

it('can access the withdraw page', function () {
    $user = User::factory()->create();
    $response = $this->actingAs($user)->get(route('withdraw.create'));

    $response->assertStatus(200);
});

it('can access the withdraw from user  wallet', function () {
    $user = User::factory()->create();
    $gateway = PaymentMethod::factory()->create();
    $user->wallet->deposit(1000);

    $response = actingAs($user)->post(route('withdraw.store'), [
        'amount' => 100,
        'method' => $gateway->id,
        'wallet_address' => 'test_wallet_address',
    ]);

    $response->assertSessionHasNoErrors()
        ->assertSessionHas('message')
        ->assertRedirect();
});

it('cannot withdraw if balance is low', function () {
    $user = User::factory()->create();
    $gateway = PaymentMethod::factory()->create();

    $response = actingAs($user)->post(route('withdraw.store'), [
        'amount' => 100,
        'method' => $gateway->id,
        'wallet_address' => 'test_wallet_address',
    ]);

    $response->assertSessionHas('error')
        ->assertRedirect();
});
