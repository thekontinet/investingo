<x-dashboard-layout>
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><a href="{{ route('invest.index') }}"
                                    class="text-soft back-to"><em class="icon ni ni-arrow-left"> </em><span>My
                                        Investment</span></a></div>
                            <div class="nk-block-between-md g-4">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title fw-normal">{{ $investment->plan->name }} - Daily
                                        {{ $investment->plan->daily_interest }}% for
                                        {{ $investment->plan->terms_days }} Days</h2>
                                    <div class="nk-block-des">
                                        <p>
                                            @if ($investment->closed())
                                                <span class="badge bg-outline bg-danger">Closed</span>
                                            @else
                                                @if ($investment->approved_at)
                                                    <span class="badge bg-outline bg-success">Approved</span>
                                                @else
                                                    <span class="badge bg-outline bg-warning">Pending</span>
                                                @endif
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="nk-block-tools gx-3">
                                        @if (!$investment->approved())
                                            <li class="order-md-last">
                                                <form action="{{ route('invest.destroy', $investment) }}" method="post"
                                                    onsubmit="return confirm('Are you sure of this action ?')">
                                                    @csrf
                                                    <button class="btn btn-danger"><em class="icon ni ni-cross"></em>
                                                        <span>Close Investment</span>
                                                    </button>
                                                </form>
                                            </li>
                                        @endif
                                        @if ($investment->closed() && !$investment->settled)
                                            <li>
                                                <form action="{{ route('invest.withdraw', $investment) }}"
                                                    method="post"
                                                    onsubmit="return confirm('Are you sure you want to withdraw to wallet ?')">
                                                    @csrf
                                                    <button class="btn btn-primary"><em class="icon ni ni-wallet"></em>
                                                        <span>Send to Wallet</span>
                                                    </button>
                                                </form>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="row gy-gs">
                                    <div class="col-md-6">
                                        <div class="nk-iv-wg3">
                                            <div class="nk-iv-wg3-group flex-lg-nowrap gx-4">
                                                <div class="nk-iv-wg3-sub">
                                                    <div class="nk-iv-wg3-amount">
                                                        <div class="number">{{ money($investment->amount) }}</div>
                                                    </div>
                                                    <div class="nk-iv-wg3-subtitle">Invested Amount</div>
                                                </div>
                                                <div class="nk-iv-wg3-sub">
                                                    <span class="nk-iv-wg3-plus text-soft"><em
                                                            class="icon ni ni-plus"></em></span>
                                                    <div class="nk-iv-wg3-amount">
                                                        <div class="number">{{ money($investment->profit) }}</div>
                                                    </div>
                                                    <div class="nk-iv-wg3-subtitle">Profit Earned</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-md-6 col-lg-4 offset-lg-2">
                                        <div class="nk-iv-wg3 ps-md-3">
                                            <div class="nk-iv-wg3-group flex-lg-nowrap gx-4">
                                                <div class="nk-iv-wg3-sub">
                                                    <div class="nk-iv-wg3-amount">
                                                        <div class="number">{{ money($investment->total_return) }}
                                                        </div>
                                                    </div>
                                                    <div class="nk-iv-wg3-subtitle">Estimated Returns</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div>
                            <div id="schemeDetails" class="nk-iv-scheme-details">
                                <ul class="nk-iv-wg3-list">
                                    <li>
                                        <div class="sub-text">Term</div>
                                        <div class="lead-text">{{ $investment->plan->terms_days }} Days</div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Term start at</div>
                                        <div class="lead-text">{{ $investment->approved_at?->format('jS M Y') }}</div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Term end at</div>
                                        <div class="lead-text">{{ $investment->end_at?->format('jS M Y') }}</div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Estimated daily interest</div>
                                        <div class="lead-text">{{ $investment->plan->daily_interest }}%</div>
                                    </li>
                                </ul><!-- .nk-iv-wg3-list -->
                                <ul class="nk-iv-wg3-list">
                                    <li>
                                        <div class="sub-text">Ordered date</div>
                                        <div class="lead-text">{{ $investment->created_at?->format('jS M Y') }}</div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Approved date</div>
                                        <div class="lead-text">{{ $investment->approved_at?->format('jS M Y') }}</div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Email</div>
                                        <div class="lead-text">{{ $investment->user?->email }}</div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Status</div>
                                        <div class="lead-text">
                                            @if (!$investment->paused)
                                                <span class="badge bg-outline bg-primary text-white">Running</span>
                                            @else
                                                <span class="badge bg-outline bg-warning text-white">Not Running</span>
                                            @endif
                                        </div>
                                    </li>
                                </ul><!-- .nk-iv-wg3-list -->
                                <ul class="nk-iv-wg3-list">
                                    <li>
                                        <div class="sub-text">Captial invested</div>
                                        <div class="lead-text"><span class="currency currency-usd">USD</span>
                                            {{ money($investment->amount) }}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Estimated daily profit</div>
                                        <div class="lead-text">
                                            {{ money($investment->daily_profit_amount) }}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Profit Earned</div>
                                        <div class="lead-text">
                                            {{ money($investment->profit) }}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sub-text">Estimated returns</div>
                                        <div class="lead-text">
                                            {{ money($investment->total_return) }}
                                        </div>
                                    </li>
                                </ul><!-- .nk-iv-wg3-list -->
                            </div><!-- .nk-iv-scheme-details -->
                        </div>
                    </div><!-- .nk-block -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <h5 class="nk-block-title">Graph View</h5>
                        </div>
                        <div class="row g-gs">
                            <div class="col-lg-6">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner justify-center text-center h-100">
                                        <div class="nk-iv-wg5">
                                            <div class="nk-iv-wg5-head">
                                                <h5 class="nk-iv-wg5-title">Overview</h5>
                                            </div>
                                            <div class="nk-iv-wg5-ck">
                                                <input type="text" class="knob-half" value="{{ $completedRate }}"
                                                    data-fgColor="#6576ff" data-bgColor="#d9e5f7"
                                                    data-thickness=".06" data-width="300" data-height="155"
                                                    data-displayInput="false">
                                                <div class="nk-iv-wg5-ck-result">
                                                    <div class="text-lead">{{ $completedRate }}%</div>
                                                    <div class="text-sub">
                                                        {{ money($investment->daily_profit_amount) }} / per
                                                        day</div>
                                                </div>
                                                <div class="nk-iv-wg5-ck-minmax">
                                                    <span>{{ money(0) }}</span><span>{{ money($investment->total_return) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg col-sm-6">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner justify-center text-center h-100">
                                        <div class="nk-iv-wg5">
                                            <div class="nk-iv-wg5-head">
                                                <h5 class="nk-iv-wg5-title">Day Remain</h5>
                                                <div class="nk-iv-wg5-subtitle">Earn so far
                                                    <strong>{{ money($investment->profit) }}</strong>
                                                </div>
                                            </div>
                                            <div class="nk-iv-wg5-ck sm">
                                                <input type="text" class="knob-half"
                                                    value="{{ $daysRemainingPercent }}" data-fgColor="#816bff"
                                                    data-bgColor="#d9e5f7" data-thickness=".07" data-width="240"
                                                    data-height="125" data-displayInput="false">
                                                <div class="nk-iv-wg5-ck-result">
                                                    <div class="text-lead sm">{{ $investment->remainingDays }} D</div>
                                                    <div class="text-sub">day remain</div>
                                                </div>
                                                <div class="nk-iv-wg5-ck-minmax">
                                                    <span>0</span><span>{{ $investment->duration_in_days }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
