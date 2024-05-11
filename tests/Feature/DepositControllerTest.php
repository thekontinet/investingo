<?php

use App\Models\PaymentMethod;
use App\Models\Transaction;
use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseHas;

it('can access the deposit page', function () {
    $user = User::factory()->create();
    $response = $this->actingAs($user)->get(route('deposit.create'));

    $response->assertStatus(200);
});

it('can request deposit', function () {
    $user = User::factory()->create();
    $gateway = PaymentMethod::factory()->create();

    $response = actingAs($user)->post(route('deposit.store'), [
        'amount' => 100,
        'method' => $gateway->id,
    ]);

    assertDatabaseHas(Transaction::class, [
        'amount' => 100,
        'confirmed' => false,
    ]);

    $response->assertRedirect();
});
