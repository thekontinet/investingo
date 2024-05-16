<x-frontpage::layout>
    <!-- slideshow content begin -->
    <div class="uk-section uk-padding-remove-vertical uk-scrollspy-inview uk-animation-fade"
        data-uk-scrollspy="cls:uk-animation-fade; delay: 200">
        <div class="uk-container">
            <div class="in-slideshow uk-position-relative uk-visible-toggle" data-uk-slideshow>
                <ul class="uk-slideshow-items">
                    <li>
                        <div class="uk-height-1-1 uk-light monee-custom-slideshow" data-uk-grid>
                            <div
                                class="uk-position-center-left uk-width-1-2@m uk-height-1-1 uk-overlay uk-background-primary">
                                <img class="uk-position-left uk-animation-slide-bottom-small img-stretch"
                                    src="/frontpage/monee/img/in-lazy.gif"
                                    data-src="/frontpage/monee/img/in-monee-slideshow-graph.png" alt="slideshow-image"
                                    data-width data-height data-uk-img>
                                <div class="uk-position-center-left uk-padding-small uk-text-center uk-text-left@m">
                                    <div class="uk-animation-slide-top-small">
                                        <h3 class="uk-text-large">{{ $appSettings->headline }}</h3>
                                        <p class="uk-text-small">{{ $appSettings->tagline }}</p>
                                        <a href="{{ route('login') }}"
                                            class="uk-button uk-button-primary uk-border-rounded">Open
                                            an
                                            Account</a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-position-center-right uk-width-1-2@m uk-height-1-1 uk-visible@m">
                                <img class="uk-position-right uk-animation-slide-bottom-small uk-height-1-1 img-cover"
                                    src="/frontpage/monee/img/in-lazy.gif"
                                    data-src="/frontpage/monee/img/in-monee-2-background.png" alt="slideshow-image"
                                    data-width data-height data-uk-img>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-height-1-1 uk-light monee-custom-slideshow" data-uk-grid>
                            <img class="in-img-stretch" src="/frontpage/monee/img/in-lazy.gif"
                                data-src="/frontpage/monee/img/in-signin-image.jpg" alt="slideshow-background"
                                width="1210" height="438" data-uk-img>
                            <div class="uk-position-center uk-width-1-1@m uk-overlay monee-slide2-text">
                                <div class="uk-text-center uk-animation-slide-top-small">
                                    <h1 class="uk-margin-remove-bottom">{{ $appSettings->headline }}</h1>
                                    <p class="uk-text-lead uk-margin-remove-top uk-visible@m">
                                        {{ $appSettings->tagline }}</p>
                                    <a href="{{ route('login') }}"
                                        class="uk-button uk-button-primary uk-border-rounded">Open
                                        an
                                        Account</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="uk-container uk-light">
                    <ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-right"></ul>
                </div>
            </div>
            <x-frontpage::ticker />
        </div>
    </div>
    <!-- slideshow content end -->
    <!-- section content begin -->
    <div class="uk-section in-monee-2">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="uk-card uk-card-default uk-background-bottom-right uk-background-contain uk-background-image@s"
                        style="background-image: url(/frontpage/monee/img/in-monee-2-background.png);">
                        <div class="uk-card-body">
                            <div class="uk-grid uk-margin-small-top uk-margin-small-bottom">
                                <div class="uk-width-1-1 uk-width-3-5@s uk-width-2-5@m uk-margin-small-left">
                                    <div class="uk-flex uk-flex-left uk-margin-bottom">

                                    </div>
                                    <h2 class="uk-margin-small-top uk-margin-remove-bottom">The right place for you to
                                        invest money</h2>
                                    <p class="uk-margin-small-top">Our platform serves as your comprehensive resource
                                        for navigating the dynamic world of investments, whether you are eyeing stocks,
                                        cryptocurrencies, or indulging in disruptive innovative investments. We aim to
                                        achieve nothing but the best results for you.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section in-monee-3">
        <div class="uk-container">
            <div class="uk-grid" data-uk-grid>
                <div class="uk-width-1-3@m uk-margin-top">
                    <h2>Why {{ $appSettings->name }} Is The Best</h2>
                    <p>At {{ $appSettings->name }} your assets are one of the most important things to us, tirelessly
                        cultivated over time. Where you allocate them should be equally intentional. With
                        {{ $appSettings->name }}, your investments can become conduits for change by backing the most
                        innovative entrepreneurs, disruptive startups and diverse funds shaping your future. We aim to
                        be instrumental in shaping our societies and build a legacy that will impact generations.</p>
                    <a class="uk-button uk-button-primary" href="{{ route('register') }}">Open an Account</a>
                    <p class="uk-text-small">Not ready? <a href="{{ route('login') }}">Sign up for a demo account.</a>
                    </p>
                </div>
                <div class="uk-width-expand@m">
                    <div class="uk-grid uk-grid-collapse uk-child-width-1-3@m uk-child-width-1-2@s uk-text-center">
                        <div class="uk-tile uk-tile-default">
                            <img class="uk-margin-remove-bottom" src="/frontpage/monee/img/in-lazy.gif"
                                data-src="/frontpage/monee/img/in-monee-3-icon-1.svg" alt="monee-feauture"
                                width="50" height="48" data-uk-img>
                            <h5 class="uk-margin-small-top">Flexible Investment</h5>
                        </div>
                        <div class="uk-tile uk-tile-default">
                            <img class="uk-margin-remove-bottom" src="/frontpage/monee/img/in-lazy.gif"
                                data-src="/frontpage/monee/img/in-monee-3-icon-2.svg" alt="monee-feauture"
                                width="50" height="48" data-uk-img>
                            <h5 class="uk-margin-small-top">Instant Withdrawals</h5>
                        </div>
                        <div class="uk-tile uk-tile-default">
                            <img class="uk-margin-remove-bottom" src="/frontpage/monee/img/in-lazy.gif"
                                data-src="/frontpage/monee/img/in-monee-3-icon-3.svg" alt="monee-feauture"
                                width="50" height="48" data-uk-img>
                            <h5 class="uk-margin-small-top">Diverse Investment Opportunities</h5>
                        </div>
                        <div class="uk-tile uk-tile-default">
                            <img class="uk-margin-remove-bottom" src="/frontpage/monee/img/in-lazy.gif"
                                data-src="/frontpage/monee/img/in-monee-3-icon-4.svg" alt="monee-feauture"
                                width="50" height="48" data-uk-img>
                            <h5 class="uk-margin-small-top">24/7 support</h5>
                        </div>
                        <div class="uk-tile uk-tile-default uk-visible@m">
                            <img class="uk-margin-remove-bottom" src="/frontpage/monee/img/in-lazy.gif"
                                data-src="/frontpage/monee/img/in-monee-3-icon-5.svg" alt="monee-feauture"
                                width="50" height="48" data-uk-img>
                            <h5 class="uk-margin-small-top">Security & Trust</h5>
                        </div>
                        <div class="uk-tile uk-tile-default uk-visible@m">
                            <img class="uk-margin-remove-bottom" src="/frontpage/monee/img/in-lazy.gif"
                                data-src="/frontpage/monee/img/in-monee-3-icon-6.svg" alt="monee-feauture"
                                width="50" height="48" data-uk-img>
                            <h5 class="uk-margin-small-top">Expert Guidance</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section in-monee-5 uk-background-fixed uk-background-cover" id="started"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.685), rgb(86, 87, 90)), url('/frontpage/monee/img/bg001.jpg'); color:#fff">
        <div class="uk-container">
            <div class="uk-grid uk-child-width-1-1 uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                <div class="uk-width-1-1 uk-text-center uk-padding-large">
                    <h2 style="color: #fff">How to Get Started</h2>
                </div>
                <div class="uk-first-column">
                    <div class="uk-grid uk-grid-small">
                        <div class="uk-width-auto">
                            <div class="in-icon-wrap small default-color">
                                <span uk-icon="user"></span>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <h3 style="color:#fff" class="uk-margin-remove-bottom">Create an Account</h3>
                            <p class="uk-margin-small-top uk-margin-remove-bottom">
                                Register your account today. It's totally easy and free</p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="uk-grid uk-grid-small">
                        <div class="uk-width-auto">
                            <div class="in-icon-wrap small default-color uk-text-bold">
                                <span uk-icon="credit-card"></span>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <h3 style="color:#fff" class="uk-margin-remove-bottom">Deposit & Invest Capital</h3>
                            <p class="uk-margin-small-top uk-margin-remove-bottom">Make a capital deposit and choose an
                                investment plan..</p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="uk-grid uk-grid-small">
                        <div class="uk-width-auto">
                            <div class="in-icon-wrap small default-color uk-text-bold">
                                <span uk-icon="bolt"></span>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <h3 style="color:#fff" class="uk-margin-remove-bottom">Get Easy and Swift Withdrawals</h3>
                            <p class="uk-margin-small-top uk-margin-remove-bottom">
                                Request a withdrawal and get paid almost instantly</p>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-height-large">
                    <x-frontpage::stock-screener />
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

    <div class="uk-section" id="plans">
        <x-frontpage::section.plan-list />
    </div>
    <div class="uk-section" id="testimonies">
        <x-frontpage::section.testimony />
    </div>
</x-frontpage::layout>
