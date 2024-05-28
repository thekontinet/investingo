<?php

namespace App\Services;

use App\Models\Transaction;
use App\Models\Wallet;

class WalletService
{
    public function deposit(Wallet $wallet, int|float $amount, bool $confirmed = true, $description = null): Transaction
    {
        $transaction =  $wallet->deposit(
            $amount,
            [
                'description' => $description ?? 'Deposit'
            ],
            $confirmed
        );

        return Transaction::find($transaction->getKey());
    }

    public function withdraw(Wallet $wallet, int|float $amount, bool $confirmed = true, $description = null): Transaction
    {
        $transaction =  $wallet->withdraw(
            $amount,
            [
                'description' => $description ?? 'Withdraw'
            ],
            $confirmed
        );

        return Transaction::find($transaction->getKey());
    }

    public function transact(string $type, Wallet $wallet, int|float $amount, bool $confirmed = true, $description = null): Transaction
    {
        $transaction = match (strtolower($type)){
            'deposit' => $this->deposit($wallet, $amount, $confirmed, $description),
            'withdraw' => $this->withdraw($wallet, $amount, $confirmed, $description),
            default => null,
        };

        return Transaction::find($transaction->getKey());
    }
}
