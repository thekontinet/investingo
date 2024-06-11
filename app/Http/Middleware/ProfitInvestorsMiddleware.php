<?php

namespace App\Http\Middleware;

use App\Models\Investment;
use App\Services\InvestmentService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class ProfitInvestorsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->isMethod('GET')){
            $investmentService = app(InvestmentService::class);
            $investmentService->distributeDailyProfit();
        }
        return $next($request);
    }
}
