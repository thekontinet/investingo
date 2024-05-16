<div class="uk-container">
    <div class="uk-grid">
        <div class="uk-width-1-1">
            <div class="uk-card uk-card-default uk-border-rounded uk-background-center uk-background-contain uk-background-image@m"
                style="background-image: url(&quot;img/blockit/in-team-background-1.png&quot;); will-change: background-position-y; background-position-y: calc(50% + 0px);"
                data-uk-parallax="bgy: -100">
                <div class="uk-card-body">
                    <div class="uk-grid uk-flex uk-flex-center">
                        <div class="uk-width-3-4@m uk-text-center">
                            <h2>What our clients says</h2>
                            <p>We are a group of passionate, independent thinkers who never stop exploring new ways
                                to improve trading for the self-directed investor.</p>
                        </div>
                    </div>
                    <div class="uk-child-width-1-3@m uk-text-center uk-margin-small-bottom uk-grid" data-uk-grid="">
                        @foreach (app(App\Settings\PageSettings::class)->testimonies as $testimony)
                            <div class="uk-first-column">
                                <img src="{{ $testimony['image'] ? asset('storage/' . $testimony['image']) : 'https://ui-avatars.com/api/?name=' . $testimony['title'] }}"
                                    alt="{{ $testimony['title'] }}" width="200" height="200">
                                <h4 class="uk-margin-small-top uk-margin-remove-bottom">{{ $testimony['title'] }}
                                </h4>
                                <span
                                    class="uk-label uk-label-warning uk-text-small uk-border-rounded uk-margin-small-top uk-margin-small-bottom">Chief
                                    {{ $testimony['subtitle'] }}</span>
                                <p>{{ $testimony['comment'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
