<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $appSettings->description }}">
    <title> {{ $appSettings->name }} - {{ $appSettings->tagline }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="/frontpage/oitila/assets/css/bootstrap.min.css">
    <!-- fontawesome icon  -->
    <link rel="stylesheet" href="/frontpage/oitila/assets/css/fontawesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" href="/frontpage/oitila/assets/fonts/flaticon.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="/frontpage/oitila/assets/css/animate.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="/frontpage/oitila/assets/css/modal-video.min.css">
    <!-- slick css -->
    <link rel="stylesheet" href="/frontpage/oitila/assets/css/slick.css">
    <link rel="stylesheet" href="/frontpage/oitila/assets/css/slick-theme.css">
    <!-- toastr js -->
    <link rel="stylesheet" href="/frontpage/oitila/assets/css/toastr.min.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="/frontpage/oitila/assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="/frontpage/oitila/assets/css/responsive.css">
</head>

<body>

    <div class="notification-alert">
        <div class="notice-list">

        </div>
    </div>

    <!-- preloader begin-->
    <div class="preloader">
        <img src="/frontpage/oitila/assets/img/tenor.gif" alt="">
    </div>
    <!-- preloader end -->

    <div class="mobile-navbar-wrapper">

        <!-- header begin -->
        <div class="header" id="header">
            <div class="bottom">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-2 d-xl-flex d-lg-flex d-block align-items-center">
                            <div class="row">
                                <div class="col-6 d-xl-none d-lg-none d-block">
                                    <button class="navbar-toggler" type="button">
                                        <span class="dag"></span>
                                        <span class="dag2"></span>
                                        <span class="dag3"></span>
                                    </button>
                                </div>
                                <div
                                    class="col-xl-12 col-lg-12 col-6 d-xl-block d-lg-block d-flex align-items-center justify-content-end">
                                    <div class="logo">
                                        <x-application-logo />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-10">
                            <div class="mainmenu">
                                <nav class="navbar navbar-expand-lg">

                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('home') }}" role="button">
                                                    Home
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class='nav-link' href='#about'>about us<span
                                                        class="sr-only">(current)</span></a>
                                            </li>

                                            <li class="nav-item">
                                                <a class='nav-link' href='#pricing'>Plans<span
                                                        class="sr-only">(current)</span></a>
                                            </li>

                                            <li class="nav-item">
                                                <a class='nav-link' href='#reason'>Why Us<span
                                                        class="sr-only">(current)</span></a>
                                            </li>


                                            <li class="nav-item join-now-btn">
                                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header end -->

        {{ $slot }}

        <!-- footer begin -->
        <div class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                            <div class="about-widget">
                                <x-application-logo />
                                <p>More than just an investment platform, we're your partner on the path to
                                    financial
                                    freedom. Start your journey today and unlock the potential of your hard-earned
                                    money.</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-10">
                            <div class="link-widget">
                                <h4 class="title">
                                    Useful links
                                </h4>
                                <ul>
                                    <li>
                                        <a href="#about" class="single-link">
                                            About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#affliate" class="single-link">
                                            Affiliate
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#plans" class="single-link">
                                            Pricing Plan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#plans" class="single-link">
                                            Profit
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-10">
                            <div class="newsletter-widget">
                                <h4 class="title">
                                    Subscribe To Our Newsletter
                                </h4>
                                <form class="newsletter-form">
                                    <input type="text" placeholder="Enter Your Mail Address">
                                    <button class="def-btn def-small">
                                        Subscribe
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <p>Copyright © <a href='/live/'>{{ $appSettings->name }}</a> - 2020. All Rights
                                Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer end -->

        <div class="d-xl-block d-lg-block d-none">
            <div class="back-to-top-btn">
                <a href="#">
                    <img src="/frontpage/oitila/assets/img/svg/arrow.svg" alt="">
                </a>
            </div>
        </div>

        <!-- jquery -->
        <script src="/frontpage/oitila/assets/js/jquery.js"></script>
        <!-- popper js -->
        <script src="/frontpage/oitila/assets/js/popper.min.js"></script>
        <!-- bootstrap -->
        <script src="/frontpage/oitila/assets/js/bootstrap.min.js"></script>
        <!-- modal video js -->
        <script src="/frontpage/oitila/assets/js/jquery-modal-video.min.js"></script>
        <!-- slick js -->
        <script src="/frontpage/oitila/assets/js/slick.min.js"></script>
        <!-- toastr js -->
        <script src="/frontpage/oitila/assets/js/toastr.min.js"></script>
        <!-- investment profit calculator-->
        <script src="/frontpage/oitila/assets/js/investment-profit-calculator.js"></script>
        <!-- main -->
        <script src="/frontpage/oitila/assets/js/main.js"></script>

        <script src="{{ $appSettings->livechat }}"></script>

</body>

</html>
