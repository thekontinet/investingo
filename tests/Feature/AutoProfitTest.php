<?php

use App\Models\User;

test('it can automatically add profit', function () {
    \Pest\Laravel\actingAs(User::factory()->create());
    $investmentService = app(\App\Services\InvestmentService::class);
    /** @var User $user */
    $user = \Illuminate\Support\Facades\Auth::user();
    $plan = \App\Models\Plan::factory()->create(['min_deposit' => 10, 'daily_interest' => 10]);
    $user->wallet->deposit(1000);
    $investment = $investmentService->openNewInvestment($user, $plan, 100);
    $investment->approve();
    $investment->update(['auto' => true]);

    $investmentService->distributeDailyProfit();

    \PHPUnit\Framework\assertEquals($investment->refresh()->profit, 10);
});
