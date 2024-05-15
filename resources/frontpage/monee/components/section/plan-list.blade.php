<div class="uk-container">
    <div class="uk-grid-match uk-child-width-1-3@m uk-child-width-1-2@s in-card-10 uk-grid uk-grid-stack" data-uk-grid="">
        <div class="uk-width-1-1 uk-first-column">
            <h1 class="uk-margin-remove-vertical">Our Investment Plans</h1>
            <p class="uk-text-lead uk-margin-remove-vertical">Explore Lucrative Investment Plans Tailored to Your
                Financial Goals. Discover a Range of Opportunities Designed to Maximize Returns and Secure Your
                Future.</p>
        </div>
        @foreach (App\Models\Plan::all() as $plan)
            <div class="uk-grid-margin uk-first-column">
                <div
                    class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-blue">
                    <div class="in-icon-wrap uk-margin-bottom">
                        <i class="fas fa-database fa-lg"></i>
                    </div>
                    <h4 class="uk-margin-top">
                        <a href="{{ route('invest.create', ['plan_id' => $plan->id]) }}">{{ $plan->name }}<i
                                class="fas fa-chevron-right uk-float-right"></i></a>
                    </h4>
                    <p class="uk-text-bold">{{ money($plan->min_deposit) }} - {{ money($plan->max_deposit) }}</p>
                    <hr>
                    <p>{{ $plan->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
