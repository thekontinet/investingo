@php
    $plans = App\Models\Plan::query()->get();
@endphp
<div class="profit-calculator">
    <div class="calc-header">
        <h3 class="title">Calculate <span class="special"> Your Profit</span></h3>
    </div>
    <div class="calc-body">
        <div class="part-plan">
            <h4 class="title">
                Choose Investment Plan
            </h4>
            <div class="dropdown show">
                <a class="dropdown-toggle displayed-selected-plan" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select Investment Plan
                </a>
                <div class="dropdown-menu plan-select-list" aria-labelledby="dropdownMenuLink">
                    @foreach ($plans as $plan)
                        <a class="dropdown-item single-select-plan selected-plan active" href="#"
                            data-max-amount="{{ $plan->max_deposit }}" data-min-amount="{{ $plan->min_deposit }}"
                            data-package-no="{{ $plan->id }}" data-parcentage="{{ $plan->daily_interest }}"
                            data-days="{{ $plan->terms_days }}">{{ $plan->daily_interest }}% daily
                            For {{ $plan->terms_days }} Days</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="part-amount">
            <h4 class="title">
                Enter Amount
            </h4>
            <form>
                <span class="currency-symbol" id="basic-addon1">$</span>
                <input type="text" class="inputted-amount" value="10">
                <button class="dropdown-toggle displayed-selected-currency" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    USD
                </button>
                <div class="dropdown-menu currency-select-list" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item single-currency-select selected-currency active" href="#"
                        data-currency="usd">USD</a>
                    <a class="dropdown-item single-currency-select" href="#" data-currency="eur">EUR</a>
                    <a class="dropdown-item single-currency-select" href="#" data-currency="btc">BTC</a>
                    <a class="dropdown-item single-currency-select" href="#" data-currency="eth">ETH</a>
                </div>
            </form>
        </div>
        <div class="d-inline-block cursor-not-allowed">
            <button class="calculate-all">Calculate</button>
        </div>
        <i class="fas fa-check"></i>
    </div>
    <div class="part-result">
        <ul>
            <li>
                <div class="icon">
                    <img src="/frontpage/oitila/assets/img/svg/business-and-finance.svg" alt="">
                </div>
                <div class="text">
                    <span class="title">Total<br /> Percent</span>
                    <span class="number js_totalPercentage">250.00%</span>
                </div>
            </li>
            <li>
                <div class="icon">
                    <img src="/frontpage/oitila/assets/img/svg/profit.svg" alt="">
                </div>
                <div class="text">
                    <span class="title">Daily<br /> Profits</span>
                    <span class="number js_dailyProfit">$0.05</span>
                </div>
            </li>
            <li>
                <div class="icon">
                    <img src="/frontpage/oitila/assets/img/svg/profits.svg" alt="">
                </div>
                <div class="text">
                    <span class="title">Net<br /> Profit</span>
                    <span class="number js_netProfit">$25.00</span>
                </div>
            </li>
            <li>
                <div class="icon">
                    <img src="/frontpage/oitila/assets/img/svg/return-on-investment.svg" alt="">
                </div>
                <div class="text">
                    <span class="title">Total<br /> Return</span>
                    <span class="number js_totalReturn">$35.00</span>
                </div>
            </li>
        </ul>
    </div>
</div>
