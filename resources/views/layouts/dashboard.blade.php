<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="/">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Investment Dashboard | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="/dash_assets/css/dashlite.css?ver=3.2.3">
    <link id="skin-default" rel="stylesheet" href="/dash_assets/css/theme.css?ver=3.2.3">
</head>

<body class="nk-body npc-invest bg-lighter ">
    <div class="nk-app-root">
        <!-- wrap @s -->
        <div class="nk-wrap ">
            @include('layouts.dashboard-navigation')
            <!-- content @s -->
            <div class="nk-content nk-content-lg nk-content-fluid">
                <div class="container-xl wide-lg">
                    <div class="nk-content-inner">
                        {{ $slot }}
                    </div>
                </div>
            </div>
            <!-- content @e -->
            <!-- footer @s -->
            <div class="nk-footer nk-footer-fluid bg-lighter">
                <div class="container-xl wide-lg">
                    <div class="nk-footer-wrap">
                        <div class="nk-footer-copyright"> &copy; {{ date('Y') }} {{ config('app.name') }}
                        </div>
                        <div class="nk-footer-links">

                        </div>
                    </div>
                </div>
            </div>
            <!-- footer @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- app-root @e -->

    <!-- JavaScript -->
    <script src="/dash_assets/js/bundle.js?ver=3.2.3"></script>
    <script src="/dash_assets/js/scripts.js?ver=3.2.3"></script>
    <script src="/dash_assets/js/charts/chart-invest.js?ver=3.2.3"></script>
    @stack('scripts')
</body>

</html>
