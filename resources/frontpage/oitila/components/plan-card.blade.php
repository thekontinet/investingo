@props(['plan'])
<div class="single-plan">
    <h3>{{ $plan->name }}</h3>
    <div class="plan-icon">
        <img src="/frontpage/oitila/assets/img/icon/bronze-medal.png" alt="">
    </div>
    <div class="feature-list">
        <ul>
            <li><i class="fas fa-check"></i> Minimum Deposit {{ money($plan->min_deposit) }}</li>
            <li><i class="fas fa-check"></i> Miximum Deposit {{ money($plan->max_deposit) }}</li>
            <li><i class="fas fa-check"></i> Durations: {{ $plan->terms_days }} Days</li>
        </ul>
    </div>
    <div class="price-info">
        <span class="parcent">{{ $plan->total_return }}%</span>
        <span class="price">{{ $plan->daily_interest }}%<small>/Daily</small></span>
    </div>
    <a href="{{ route('invest.create', ['plan_id' => $plan->id]) }}" class="btn-hyipox-medium price-button">Invest
        now</a>
</div>
