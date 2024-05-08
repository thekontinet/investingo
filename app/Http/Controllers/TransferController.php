<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'from' => ['required', 'exists:wallets,slug'],
        ]);

        /** @var User */
        $user = auth()->user();
        $from = $user->getWallet($request->from);
        $to = $user->wallet;
        $amount = $from->balance;

        if ($amount <= 0) {
            return back()->with(['error' => 'Balance is empty']);
        }

        if ($from->id == $to->id) {
            return back()->with(['error' => 'Cannot tranfer to same wallet']);
        }

        $from->withdraw($amount);
        $to->deposit($amount);

        return back()->with(['message' => 'Transfer successful']);
    }
}
