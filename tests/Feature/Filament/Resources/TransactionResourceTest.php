<?php

use App\Filament\Resources\TransactionResource\Pages\ListTransactions;
use App\Models\Transaction;
use App\Models\User;

use function Pest\Livewire\livewire;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertTrue;

test('can list all transaciton', function () {
    $transactions = Transaction::factory(5)->create();

    livewire(ListTransactions::class)
        ->assertCanSeeTableRecords($transactions);
});

test('can approve transaction', function () {
    $transaction = User::factory()->create()
        ->wallet->deposit(100, null, false);

    livewire(ListTransactions::class)
        ->assertTableActionHidden('reset', $transaction)
        ->callTableAction('approve', $transaction);

    assertTrue($transaction->fresh()->confirmed);
});

test('can reset transaction', function () {
    $transaction = User::factory()->create()
        ->wallet->deposit(100);

    livewire(ListTransactions::class)
        ->assertTableActionHidden('approve', $transaction)
        ->callTableAction('reset', $transaction);

    assertFalse($transaction->fresh()->confirmed);
});
