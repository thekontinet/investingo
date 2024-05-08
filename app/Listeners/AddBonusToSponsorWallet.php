<?php

namespace App\Listeners;

use App\Models\Transaction;
use Bavix\Wallet\Internal\Events\TransactionCreatedEvent;

class AddBonusToSponsorWallet
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     */
    public function handle(TransactionCreatedEvent $event): void
    {
        if ($event->getType() !== 'deposit') {
            return;
        }

        $transaction = Transaction::find($event->getId());

        if (!$transaction) {
            return;
        }

        if (!$sponsor = $transaction->payable->sponsor) {
            return;
        }

        $amount = $transaction->amount * 10 / 100;
        $data = [
            'type' => 'refer',
            'description' => 'Refer Bonus',
            'gateway' => null,
            'wallet_address' => null,
            'method' => null,
        ];

        $sponsor->bonus_wallet->deposit($amount, $data, false);
    }
}
