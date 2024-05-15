<!doctype html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, javascript">
    <meta name="author" content="Indonez">
    <meta name="theme-color" content="#4184DD">
    <!-- preload assets -->
    <link rel="preload" href="/frontpage/monee/fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/frontpage/monee/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/frontpage/monee/fonts/open-sans-v17-latin-regular.woff2" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="/frontpage/monee/fonts/work-sans-v5-latin-300.woff2" as="font" type="font/woff2"
        crossorigin>
    <link rel="preload" href="/frontpage/monee/fonts/work-sans-v5-latin-regular.woff2" type="font/woff2" crossorigin>
    <link rel="preload" href="/frontpage/monee/fonts/work-sans-v5-latin-700.woff2" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="/frontpage/monee/css/style.css" as="style">
    <!-- uikit -->
    <script src="/frontpage/monee/js/vendors/uikit.min.js"></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ $appSettings->logoUrl() }}" type="image/x-icon">
    <!-- touch icon -->
    <link rel="apple-touch-icon-precomposed" href="/frontpage/monee/img/apple-touch-icon.png">
    <meta name="description" content="{{ $appSettings->description }}">
    <title> {{ $appSettings->name }} - {{ $appSettings->tagline }}</title>
</head>

<body>
    <!-- page loader begin -->
    <div class="page-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- page loader end -->
    <!-- header begin -->
    <header>
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div class="uk-flex uk-flex-center uk-flex-between@s in-header-account">
                            <ul class="uk-subnav uk-subnav-divider">
                                {{-- <li><a href="index.html#">Personal</a></li>
                                <li><a href="index.html#">Institutional</a></li> --}}
                            </ul>
                            <div class="uk-visible@s">
                                <a href="{{ route('login') }}"
                                    class="uk-button uk-button-small uk-button-default">Login<i
                                        class="fas fa-right-to-bracket"></i></a>
                                <a href="{{ route('register') }}"
                                    class="uk-button uk-button-small uk-button-primary uk-margin-small-left">Create
                                    Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="uk-navbar-container uk-navbar-transparent"
                data-uk-sticky="show-on-up: true; top: 80; animation: uk-animation-fade">
                <div class="uk-container" data-uk-navbar>
                    <div class="uk-navbar-left uk-width-1-1 uk-flex uk-flex-between">
                        <div class="uk-navbar-item uk-logo">
                            <x-application-logo />
                        </div>
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li><a href="/">Home</a>
                            <li><a href="#plans">Plan</a>
                            <li><a href="#testimonies">Testimonies</a>
                            <li><a href="#started">How it Works</a>
                        </ul>
                    </div>
                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item" hidden>
                            <div class="in-optional-navs">
                                <a href="{{ route('login') }}"
                                    class="uk-button uk-button-small uk-button-default">Login<i
                                        class="fas fa-right-to-bracket"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- header end -->
    <main>
        {{ $slot }}
    </main>
    <!-- footer begin -->
    <footer>
        <div class="uk-section uk-padding-remove-vertical uk-margin-medium-top">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 in-footer-info">
                        <hr>
                        <div class="uk-child-width-1-1 uk-child-width-1-2@s" data-uk-grid="">
                            <div class="uk-flex uk-flex-center uk-flex-left@s">
                                <ul class="uk-subnav">
                                    {{-- <li class="uk-text-uppercase uk-visible@m"><span>need help?</span></li>
                                    <li><i class="uk-margin-small-left fas fa-phone"></i> 1-800-123-4567</li>
                                    <li><a href="index.html#"><i class="uk-margin-small-left fas fa-comments"></i>
                                            Live Chat</a></li> --}}
                                    <li><a href="mailto:{{ $appSettings->email }}"><i
                                                class="uk-margin-small-left fas fa-envelope-open-text"></i> Email US</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="uk-child-width-1-4@m" data-uk-grid="">
                    <div>
                        <p>Beyond a mere investment platform, we serve as your ally on the road to financial liberation.
                            Initiate your journey today and harness the power of Artificial Intelligence to streamline
                            financial management, propelling you towards independence and freedom.</p>
                    </div>
                    <div class="in-footer-address">
                        <h4>Contact us</h4>
                        <p>Email: {{ $appSettings->email }}</p>
                    </div>
                </div>
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-text-small">
                        <div class="uk-card uk-card-small uk-card-default uk-border-rounded uk-margin-bottom">
                            <div class="uk-card-body">
                                <div class="in-footer-copyright" data-uk-grid="">
                                    <div class="uk-width-3-4@s uk-width-1-2@m uk-text-center uk-text-left@s">
                                        <p class="copyright-text">Copyright ©2024 {{ $appSettings->name }}. All Rights
                                            Reserved.</p>
                                    </div>
                                    <div class="uk-width-1-4@s uk-width-1-2@m">
                                        <div class="uk-flex uk-flex-center uk-flex-right@s">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1 in-footer-disclaimer">
                        <p>{{ $appSettings->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <!-- to top begin -->
    <a href="#top" class="to-top uk-visible@m" data-uk-scroll>
        Top<i class="fas fa-chevron-up"></i>
    </a>
    <!-- to top end -->
    <!-- javascript -->
    <script src="/frontpage/monee/js/utilities.min.js"></script>
    <script src="/frontpage/monee/js/config-theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.20.10/dist/js/uikit-icons.min.js"></script>
    <script src="{{ $appSettings->logo }}"></script>
</body>

</html>
