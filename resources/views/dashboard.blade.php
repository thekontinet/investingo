<x-dashboard-layout>
    <div class="nk-content-body">
        <div class="nk-block">
            <div class="row gy-gs">
                <div class="col-md-6 col-lg-4">
                    <div class="nk-wg-card is-dark card card-bordered">
                        <div class="card-inner">
                            <div class="nk-iv-wg2">
                                <div class="nk-iv-wg2-title">
                                    <h6 class="title">Available Balance <em class="icon ni ni-info"></em></h6>
                                </div>
                                <div class="nk-iv-wg2-text">
                                    <div class="nk-iv-wg2-amount">
                                        {{ money($user->wallet->balance) }}
                                    </div>
                                    <div class="mt-1">
                                        <a href='{{ route('deposit.create') }}'
                                            class="btn btn-primary btn-sm d-block">Deposit</a>
                                        <a href='{{ route('withdraw.create') }}'
                                            class="btn btn-light btn-sm mt-2 d-block">Withdraw</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
                <div class="col-md-12 col-lg-4">
                    <div class="nk-wg-card is-s3 card card-bordered">
                        <div class="card-inner">
                            <div class="nk-iv-wg2">
                                <div class="nk-iv-wg2-title">
                                    <h6 class="title">Bonus <em class="icon ni ni-info"></em></h6>
                                </div>
                                <div class="nk-iv-wg2-text">
                                    <div class="nk-iv-wg2-amount">
                                        {{ money($user->bonus_wallet->balance) }}
                                    </div>
                                </div>
                                <form action="{{ route('transfer') }}" method="post"
                                    onsubmit="return confirm('Are you sure you want to transfer this funds ?')">
                                    @csrf
                                    <input type="hidden" name="from" value="{{ $user->bonus_wallet->slug }}">
                                    <input type="hidden" name="to" value="{{ $user->wallet->slug }}">
                                    <button class="btn btn-primary d-block">Tranfer to Main Wallet</button>
                                </form>
                            </div>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
                <div class="col-md-6 col-lg-4">
                    <div class="nk-wg-card is-s1 card card-bordered">
                        <div class="card-inner">
                            <div class="nk-iv-wg2">
                                <div class="nk-iv-wg2-title">
                                    <h6 class="title">Total Invested <em class="icon ni ni-info"></em></h6>
                                </div>
                                <div class="nk-iv-wg2-text">
                                    <div class="nk-iv-wg2-amount"> {{ money($user->investment_balance) }}
                                        <span class="small" style="font-size: 18px">
                                            <span class="">Profit:</span>
                                            {{ money($user->investment_profit_balance) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .nk-block -->
        <div class="nk-block">
            <div class="card card-bordered card-stretch">
                <div class="card-inner-group">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h5 class="title">All Transactions</h5>
                            </div>
                            <div>
                                <a href="{{ route('transactions.index') }}" class="btn btn-primary">See All</a>
                            </div>
                        </div><!-- .card-title-group -->
                    </div><!-- .card-inner -->
                    <x-transaction.list :transactions="$transactions" />
                </div><!-- .card-inner-group -->
            </div><!-- .card -->
        </div><!-- .nk-block -->
        <div class="nk-block">
            <div class="card card-bordered">
                <div class="nk-refwg">
                    <div class="nk-refwg-invite card-inner">
                        <div class="nk-refwg-head g-3">
                            <div class="nk-refwg-title">
                                <h5 class="title">Refer Us & Earn</h5>
                                <div class="title-sub">Use the bellow link to invite your friends.
                                </div>
                            </div>
                        </div>
                        <div class="nk-refwg-url">
                            <div class="form-control-wrap">
                                <div class="form-clip clipboard-init" data-clipboard-target="#refUrl"
                                    data-success="Copied" data-text="Copy Link"><em
                                        class="clipboard-icon icon ni ni-copy"></em> <span class="clipboard-text">Copy
                                        Link</span></div>
                                <div class="form-icon">
                                    <em class="icon ni ni-link-alt"></em>
                                </div>
                                <input type="text" class="form-control copy-text" id="refUrl"
                                    value="{{ $user->ref_link }}">
                            </div>
                        </div>
                    </div>
                    <div class="nk-refwg-stats card-inner bg-lighter">
                        <div class="nk-refwg-group g-3">
                            <div class="nk-refwg-name">
                                <h6 class="title">My Referral <em class="icon ni ni-info" data-bs-toggle="tooltip"
                                        data-bs-placement="right" title="Referral Informations"></em></h6>
                            </div>
                            <div class="nk-refwg-info g-3">
                                <div class="nk-refwg-sub">
                                    <div class="title">{{ $user->referrers()->count() }}</div>
                                    <div class="sub-text">Total Joined</div>
                                </div>
                                <div class="nk-refwg-sub">
                                    {{-- <div class="title">548.49</div>
                                    <div class="sub-text">Referral Earn</div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="nk-refwg-ck">
                            <canvas class="chart-refer-stats" id="refBarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div><!-- .card -->
        </div><!-- .nk-block -->
    </div>
</x-dashboard-layout>
