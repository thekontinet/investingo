<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        /** @var User */
        $user = auth()->user();
        $transactions = $user->transactions()->latest()->limit(10)->get();

        return view('dashboard', compact('user', 'transactions'));
    }
}
