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
                    <div class="uk-margin-large-top" uk-slider="center:true;autoplay:true;sets:true">
                        <div class="uk-slider-items uk-child-width-1-1@m uk-margin-small-bottom uk-grid">
                            @foreach (app(App\Settings\PageSettings::class)->testimonies as $testimony)
                                <div>
                                    <div class="uk-background-default uk-padding">
                                        <p class="uk-text-large">{{ $testimony['comment'] }}</p>
                                        <div class="uk-text-center">
                                            <img src="{{ $testimony['image'] ? asset('storage/' . $testimony['image']) : 'https://ui-avatars.com/api/?name=' . $testimony['title'] }}"
                                                alt="{{ $testimony['title'] }}" width="100" height="200">
                                            <h4 class="uk-margin-small-top uk-margin-remove-bottom">
                                                {{ $testimony['title'] }}
                                            </h4>
                                            <span
                                                class="uk-label uk-label-warning uk-text-small uk-border-rounded uk-margin-small-top uk-margin-small-bottom">Chief
                                                {{ $testimony['subtitle'] }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous
                            uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next
                            uk-slider-item="next"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
