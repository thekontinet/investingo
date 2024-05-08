<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
    public function create()
    {
        $payMethod = Asset::all();

        return view('withdraw', compact('payMethod'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'method' => ['required', 'exists:assets,id'],
            'amount' => ['required', 'numeric', 'min:10'],
            'wallet_address' => ['required'],
        ]);

        if ($request->user()->canWithdraw($request->input('amount'))) {
            $data = [
                'description' => 'Funds Withdrawal',
                'wallet_address' => $request->input('wallet_address'),
                'gateway' => Asset::find($request->input('method'))?->name,
            ];

            $request->user()->withdraw($request->input('amount'), $data, false);

            return redirect()->route('dashboard')->with(['message' => 'Transaction has been submitted successfully.']);
        }

        return redirect()->route('dashboard')->with(['error' => 'Transaction failed: Insufficient balance to perform this withdrawal']);
    }
}
