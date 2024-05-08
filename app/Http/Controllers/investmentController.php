<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class investmentController extends Controller
{
    public function index()
    {
        /** @var User */
        $user = auth()->user();
        $activeInvestments = $user->investments()->withTrashed()->latest()->paginate();

        return view('invest.index', compact('activeInvestments'));
    }

    public function create(Request $request, Plan $plan)
    {
        $plan = Plan::query()->findOrFail($request->query('plan_id'));

        return view('invest.create', compact('plan'));
    }

    public function withdraw(Investment $investment)
    {
        if ($investment->settled) {
            return back()
                ->with('error', 'Investment already settled');
        }

        // Investment has to be closed and paused
        if (!$investment->closed() || !$investment->paused) {
            return redirect()->route('invest.show', $investment)
                ->with('error', 'This investment is not available for settlement');
        }

        $investment->withdraw('Take Profit');

        return redirect()->route('dashboard')->with('message', 'Investment settled to wallet');
    }

    public function store(Request $request)
    {
        $plan = Plan::query()->findOrFail($request->input('plan_id'));

        $request->validate([
            'plan_id' => ['required', 'exists:plans,id'],
            'amount' => ['required', 'numeric', "min:{$plan->min_deposit}", "max:{$plan->max_deposit}"],
            'agree' => ['required', 'boolean'],
        ]);

        /** @var User */
        $user = auth()->user();

        // Check if user has enough balance to invest
        if (!$user->wallet->canWithdraw($request->input('amount'))) {
            return redirect()->back()
                ->withErrors(['amount' => 'Low balance. Please deposit funds to your balance and try again, or invest a lesser amount']);
        }

        // Debit the user wallet and open investment
        $investment = DB::transaction(function () use ($user, $plan, $request) {
            $user->wallet->withdraw($request->input('amount'), [
                'description' => 'Open Investment',
            ]);

            return Investment::open($request->input('amount'), $plan, $user);
        });

        return redirect()->route('invest.show', $investment);
    }

    public function show(Investment $investment)
    {
        $completedRate = number_format($investment->profit / $investment->total_return * 100);
        $daysRemainingPercent = number_format(($investment->remainingDays / $investment->duration_in_days) * 100);

        return view('invest.show', compact('investment', 'completedRate', 'daysRemainingPercent'));
    }

    public function destroy(Investment $investment)
    {
        if ($investment->closed()) {
            return back()->with(['error' => 'Investment has already been closed']);
        }

        // User cannot cancel investment if already approved by admin
        if ($investment->approved_at) {
            return back()->with(['error' => 'Sorry! This investment has already started, and cannot be cancelled']);
        }

        $investment->close();
        $investment->withdraw();

        return redirect()->route('dashboard')->with(['message' => 'Investment has been cancelled']);
    }
}
