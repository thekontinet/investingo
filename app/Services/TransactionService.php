<?php

namespace App\Services;

use App\Models\Transaction;

class TransactionService
{
    public function hideTransaction(Transaction $transaction): Transaction
    {
        $transaction->update(['hidden' => true]);
        return $transaction->refresh();
    }
}
