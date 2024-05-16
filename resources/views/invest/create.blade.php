<x-dashboard-layout>
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-lg">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><a href="html/invest/invest.html" class="back-to"><em
                                        class="icon ni ni-arrow-left"></em><span>Back to plan</span></a></div>
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">{{ $plan->name }}</h2>
                            </div>
                        </div>
                    </div><!-- nk-block-head -->
                    <div class="nk-block invest-block">
                        <form action="{{ route('invest.store') }}" method="post" class="invest-form">
                            <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                            @csrf
                            <div class="row g-gs">
                                <div class="col-lg-7">
                                    <div class="invest-field form-group">
                                        <a href="{{ route('plans.index') }}" class="invest-cc-chosen">
                                            <div class="coin-item" style="align-items: flex-start">
                                                <div class="coin-icon">
                                                    <em class="icon ni ni-offer-fill"></em>
                                                </div>
                                                <div class="coin-info">
                                                    <span class="coin-text">{{ $plan->description }}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div><!-- .invest-field -->
                                    <x-money-input name="amount">
                                        <x-slot name="description">
                                            <x-input-error :messages="$errors->get('amount')" />
                                            <div class="form-note pt-2">Note: Minimum invest
                                                {{ money($plan->min_deposit) }} USD and upto
                                                {{ money($plan->max_deposit) }} USD
                                            </div>
                                        </x-slot>
                                    </x-money-input>
                                    <div class="invest-field form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <input name="agree" type="checkbox" class="custom-control-input"
                                                id="checkbox" value="1">
                                            <label class="custom-control-label" for="checkbox">I agree the <a
                                                    href="{{ route('page', 'investment-terms') }}">terms and &amp;
                                                    conditions.</a></label>
                                        </div>
                                        <x-input-error :messages="$errors->get('agree')" />
                                    </div><!-- .invest-field -->
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Proceed</button>
                                    </div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </form>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
