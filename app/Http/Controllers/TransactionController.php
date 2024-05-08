<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = auth()->user()->transactions()->latest()->paginate();

        return view('transaction.index', compact('transactions'));
    }

    public function show(Transaction $transaction)
    {
        return view('transaction.show', compact('transaction'));
    }
}
