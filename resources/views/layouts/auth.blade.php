<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="/">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $appSettings->description }}">
    <title> {{ $appSettings->name }} - {{ $appSettings->tagline }}</title>
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="/dash_assets/iamges/favicon.png">
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="/dash_assets/css/dashlite.css?ver=3.2.3">
    <link id="skin-default" rel="stylesheet" href="/dash_assets/css/theme.css?ver=3.2.3">
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-lg">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn-white btn btn-icon btn-light"
                                    data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            {{ $slot }}
                            <div class="nk-block nk-auth-footer">
                                <div class="mt-3">
                                    <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.</p>
                                </div>
                            </div><!-- .nk-block -->
                        </div><!-- .nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right"
                            data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg"
                            data-toggle-overlay="true">
                            <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                                <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">

                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Wealth in Wisdom</h4>
                                                <p>Plant your investments today; harvest your dreams tomorrow.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">

                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>Investing for Tomorrow</h4>
                                                <p>Invest in knowledge, reap the dividends of wisdom for a lifetime.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .slider-init -->
                                <div class="slider-dots"></div>
                                <div class="slider-arrows"></div>
                            </div><!-- .slider-wrap -->
                        </div><!-- .nk-split-content -->
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="/dash_assets/js/bundle.js?ver=3.2.3"></script>
    <script src="/dash_assets/js/scripts.js?ver=3.2.3"></script>

</html>
