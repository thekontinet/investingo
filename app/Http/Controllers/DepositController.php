<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function create()
    {
        return view('deposit', [
            'payMethod' => PaymentMethod::with('asset')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'method' => ['required', 'exists:payment_methods,id'],
            'amount' => ['required', 'numeric', 'min:10'],
        ]);

        $gateway = PaymentMethod::find($request->input('method'));

        $data = [
            'type' => 'deposit',
            'description' => 'Wallet Deposit',
            'gateway' => $gateway->name,
            'wallet_address' => $gateway->address,
            'method' => $request->input('method'),
        ];

        $transaction = auth()->user()->wallet->deposit($request->input('amount'), $data, false);

        return redirect()->route('transactions.show', $transaction);
    }
}
