<?php

namespace App\Services;

use App\Models\Investment;
use App\Models\Plan;
use App\Models\User;
use Bavix\Wallet\Exceptions\BalanceIsEmpty;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class InvestmentService
{
    public function openNewInvestment(User $user, Plan $plan, int | float $amount)
    {

        if (!$user->wallet->canWithdraw($amount)) {
            throw new BalanceIsEmpty('Low balance. Please deposit funds to your balance and try again, or invest a lesser amount');
        }

        return  DB::transaction(function () use ($user, $plan, $amount) {
            $user->wallet->withdraw($amount, [
                'description' => 'Open Investment',
            ]);

            return Investment::open($amount, $plan, $user);
        });
    }
    public function distributeDailyProfit()
    {
        $cacheKey = 'Investment.profit.adders';
        $profitedInvestmentIds = Cache::get($cacheKey);

        $activeInvestments = Investment::query()->where([
                'paused' => false,
                'auto' => true,
                'settled' => false
            ])
            ->whereNotIn('id', $profitedInvestmentIds ?? [])
            ->limit(10)
            ->get();

        $activeInvestments->each(fn(Investment $investment) => $this->handleAutoProfit($investment));
        logger([$activeInvestments->pluck('id'), request()->url(), request()->getMethod()]);

        // Save the key to cache so we can exclude them in the next profit
        Cache::remember(
            $cacheKey,
            now()->addSeconds(34),
            fn()=> array_merge($activeInvestments->pluck('id')->toArray(), Cache::get($cacheKey) ?? [])
        );
    }

    public function handleAutoProfit(Investment $investment): void
    {
        if($investment->auto === false || $investment->paused === true || $investment->settled === true){
            return;
        }

        $investment->addDailyProfit();

        if($investment->end_at->lessThanOrEqualTo(now())){
            $investment->close();
        }
    }
}
