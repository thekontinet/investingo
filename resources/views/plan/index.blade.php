<x-dashboard-layout>
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head text-center">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><span>Choose an Option</span></div>
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">Investment Plan</h2>
                                <div class="nk-block-des">
                                    <p>Choose your investment plan and start earning.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- nk-block -->
                    <div class="nk-block">
                        <form action="{{ route('invest.create') }}" class="plan-iv">
                            <div class="plan-iv-list nk-slider nk-slider-s2">
                                <ul class="plan-list slider-init"
                                    data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "infinite":false, "responsive":[
                                                {"breakpoint": 992,"settings":{"slidesToShow": 2}},
                                                {"breakpoint": 768,"settings":{"slidesToShow": 1}}
                                            ]}'>
                                    @foreach ($plans as $plan)
                                        <li class="plan-item">
                                            <input type="radio" id="plan-iv-{{ $plan->id }}" name="plan_id"
                                                class="plan-control" value="{{ $plan->id }}">
                                            <div class="plan-item-card">
                                                <div class="plan-item-head">
                                                    <div class="plan-item-heading">
                                                        <h4 class="plan-item-title card-title title">{{ $plan->name }}
                                                        </h4>
                                                        <p class="sub-text">{{ $plan->description }}</p>
                                                    </div>
                                                    <div class="plan-item-summary card-text">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span
                                                                    class="lead-text">{{ $plan->daily_interest }}%</span>
                                                                <span class="sub-text">Daily Interest</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <span class="lead-text">{{ $plan->terms_days }}</span>
                                                                <span class="sub-text">Term Days</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="plan-item-body">
                                                    <div class="plan-item-desc card-text">
                                                        <ul class="plan-item-desc-list">
                                                            <li><span class="desc-label">Min Deposit</span> - <span
                                                                    class="desc-data">{{ money($plan->min_deposit) }}</span>
                                                            </li>
                                                            <li><span class="desc-label">Max Deposit</span> - <span
                                                                    class="desc-data">{{ money($plan->max_deposit) }}</span>
                                                            </li>
                                                            <li><span class="desc-label">Deposit Return</span> - <span
                                                                    class="desc-data">Yes</span></li>
                                                            <li><span class="desc-label">Total Return</span> - <span
                                                                    class="desc-data">{{ $plan->totalReturn }}%</span>
                                                            </li>
                                                        </ul>
                                                        <div class="plan-item-action">
                                                            <label for="plan-iv-{{ $plan->id }}"
                                                                class="plan-label">
                                                                <span class="plan-label-base">Choose this plan</span>
                                                                <span class="plan-label-selected">Plan Selected</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- .plan-item -->
                                    @endforeach
                                </ul><!-- .plan-list -->
                            </div>
                            <div class="plan-iv-actions text-center">
                                <button class="btn btn-primary btn-lg"> <span>Continue to Invest</span> <em
                                        class="icon ni ni-arrow-right"></em></button>
                            </div>
                        </form>
                    </div><!-- nk-block -->
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
