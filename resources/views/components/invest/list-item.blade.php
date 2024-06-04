@props(['investment'])
<div class="nk-iv-scheme-item">
    @if ($investment->is_complete)
        <div class="nk-iv-scheme-icon is-done">
            <em class="icon ni ni-offer"></em>
        </div>
    @else
        <div class="nk-iv-scheme-icon is-running">
            <em class="icon ni ni-update"></em>
        </div>
    @endif
    <div class="nk-iv-scheme-info">
        <div class="nk-iv-scheme-name">{{ $investment->plan->name }} - Daily
            {{ $investment->daily_profit_rate }}% for
            {{ $investment->duration_in_days }} Days</div>
        <div class="nk-iv-scheme-desc">Invested Amount - <span class="amount">{{ money($investment->amount) }}</span>
        </div>
    </div>
    @if (!$investment->isCancelled)
        <div class="nk-iv-scheme-term">
            <div class="nk-iv-scheme-start nk-iv-scheme-order">
                <span class="nk-iv-scheme-label text-soft">Start Date</span>
                <span class="nk-iv-scheme-value date">{{ $investment->approved_at?->format('M d Y') }}</span>
            </div>
            <div class="nk-iv-scheme-end nk-iv-scheme-order">
                <span class="nk-iv-scheme-label text-soft">End Date</span>
                <span class="nk-iv-scheme-value date">{{ $investment->end_at?->format('M d Y') }}</span>
            </div>
        </div>
        <div class="nk-iv-scheme-amount">
            <div class="nk-iv-scheme-amount-a nk-iv-scheme-order">
                <span class="nk-iv-scheme-label text-soft">Estimated Return</span>
                <span class="nk-iv-scheme-value amount">{{ money($investment->total_return) }}</span>
            </div>
            <div class="nk-iv-scheme-amount-b nk-iv-scheme-order">
                <span class="nk-iv-scheme-label text-soft">Profit Earn</span>
                <span class="nk-iv-scheme-value amount">{{ money($investment->profit) }}
            </div>
        </div>
        <div class="nk-iv-scheme-more">
            <a class="btn btn-icon btn-lg btn-round btn-trans" href="{{ route('invest.show', $investment) }}"><em
                    class="icon ni ni-forward-ios"></em></a>
        </div>
        <div class="nk-iv-scheme-progress">
            <div class="progress-bar" data-progress="25"></div>
        </div>
    @else
        <span class="badge bg-danger">Cancelled</span>
    @endif
</div><!-- .nk-iv-scheme-item -->
