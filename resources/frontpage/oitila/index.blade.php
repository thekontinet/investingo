<x-frontpage::layout>
    <!-- banner begin -->
    <div class="banner">
        <div class="container">
            <div style="position: relative"
                class="row justify-content-xl-between justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div style="position: absolute; top:-90px; left:0; right:0">
                    <x-frontpage::tradingview-ticker-tape />
                </div>
                <div
                    class="col-xl-7 col-lg-7 col-sm-10 col-md-9 d-xl-flex d-lg-flex d-block align-items-center d-banner-tamim">
                    <div class="banner-content">
                        <h1>{{ $appSettings->headline }}</h1>
                        <p>{{ $appSettings->tagline }}.</p>
                        <a href="{{ route('register') }}" class="btn-hyipox">Start Investing Now</a>
                    </div>
                    <div class="banner-statics">
                        <div class="single-statics">
                            <div class="part-icon">
                                <img src="/frontpage/oitila/assets/img/svg/user.svg" alt="">
                            </div>
                            <div class="part-text">
                                <span class="text">Online Users</span>
                                <span class="number">90257.001+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-sm-10 col-md-8 monitor-for-480">
                    <x-frontpage::profit-calculator />
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- about begin -->
    <div class="about" id="reason">
        <div class="container">
            <div class="how-to-works">
                <div class="row justify-content-center justify-content-sm-center justify-content-md-start">
                    <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                        <div class="single-system">
                            <div class="part-icon">
                                <img src="/frontpage/oitila/assets/img/svg/add-user.svg" alt="">
                            </div>
                            <div class="part-text">
                                <h4 class="title">Create an Account</h4>
                                <p>Register your account today. It's totally easy and free</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                        <div class="single-system">
                            <div class="part-icon">
                                <img src="/frontpage/oitila/assets/img/svg/coin.svg" alt="">
                            </div>
                            <div class="part-text">
                                <h4 class="title">Deposit & Invest Money</h4>
                                <p>Make a capital deposit and choose an investment plan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                        <div class="single-system">
                            <div class="part-icon">
                                <img src="/frontpage/oitila/assets/img/svg/money-bag.svg" alt="">
                            </div>
                            <div class="part-text">
                                <h4 class="title">Get Easy abd Swift Withdraw</h4>
                                <p>Request a withdrawal and get paid almost instantly</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="choosing-reason">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="section-title">
                            <span class="sub-title">
                                You couldn't think
                            </span>
                            <h2>
                                why {{ $appSettings->name }} is<span class="special"> the best</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-sm-10 col-md-12">
                        <div class="part-left">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-4">
                                    <div class="single-reason">
                                        <div class="icon-box">
                                            <div class="part-icon">
                                                <img src="/frontpage/oitila/assets/img/svg/withdraw.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="part-text">
                                            <h3 class="title">Get Instant Withdrawals</h3>
                                            <p>Get your withdrawals processed instantly just by requesting it! YES!!!
                                                one request and you can go smiling to the bank.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-4">
                                    <div class="single-reason">
                                        <div class="icon-box">
                                            <div class="part-icon">
                                                <img src="/frontpage/oitila/assets/img/svg/referral.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="part-text">
                                            <h3 class="title">Unlimited Referral Bonus</h3>
                                            <p>Promote {{ $appSettings->name }} and earn unlimited refferal commissions
                                                from
                                                each deposit made by your referrals.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-4">
                                    <div class="single-reason">
                                        <div class="icon-box">
                                            <div class="part-icon">
                                                <img src="/frontpage/oitila/assets/img/svg/affiliate-marketing.svg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="part-text">
                                            <h3 class="title">Join To Affiliate Program</h3>
                                            <p>Our affiliate program is a great way to grow your earning. It's been made
                                                easy to join with us. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-2 d-xl-flex d-lg-none d-block align-items-end">
                        <div class="part-img">
                            <div class="shadow-shape"></div>
                            <img src="/frontpage/oitila/assets/img/choosing-reason.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-sm-10 col-md-12">
                        <div class="part-right">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-4">
                                    <div class="single-reason">
                                        <div class="icon-box">
                                            <div class="part-icon">
                                                <img src="/frontpage/oitila/assets/img/svg/bird.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="part-text">
                                            <h3 class="title"> Blockchain Ecosystem</h3>
                                            <p>Our platform is powered by the blockchain technology which simply means
                                                your investment is totally secured with blockchain technology.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-4">
                                    <div class="single-reason">
                                        <div class="icon-box">
                                            <div class="part-icon">
                                                <img src="/frontpage/oitila/assets/img/svg/shield.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="part-text">
                                            <h3 class="title">SSL Security</h3>
                                            <p>Our system is secured and protected using DDos protection and SSL. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-4">
                                    <div class="single-reason">
                                        <div class="icon-box">
                                            <div class="part-icon">
                                                <img src="/frontpage/oitila/assets/img/svg/customer-service.svg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="part-text">
                                            <h3 class="title">24/7 Friendly Support</h3>
                                            <p>We provide 24/7 friendly support in {{ $appSettings->name }}. We are
                                                always
                                                responsible for and cater for the needs of our clients.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->

    <!-- statics begin -->
    <div class="statics" id="statics">
        <div class="container">
            <div class="all-statics">
                <div class="row no-gutters justify-content-center">
                    <div class="col-xl-4 col-lg-3 col-sm-10 col-md-4">
                        <div class="single-statics">
                            <div class="part-img">
                                <img src="/frontpage/oitila/assets/img/svg/investor.svg" alt="investor">
                            </div>
                            <div class="part-text">
                                <span class="counter">265+</span>
                                <span class="title">total investor</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-sm-10 col-md-4">
                        <div class="single-statics">
                            <div class="part-img">
                                <img src="/frontpage/oitila/assets/img/svg/withdraw.svg" alt="investor">
                            </div>
                            <div class="part-text">
                                <span class="counter">4M+</span>
                                <span class="title">total withdraw</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-sm-10 col-md-4">
                        <div class="single-statics">
                            <div class="part-img">
                                <img src="/frontpage/oitila/assets/img/svg/money-transfering.svg" alt="investor">
                            </div>
                            <div class="part-text">
                                <span class="counter">5.2M+</span>
                                <span class="title">total transaction</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- statics end -->

    <!-- prcing plan begin -->
    <div class="pricing-plan" id="pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title">
                        <span class="sub-title">
                            Premium Package
                        </span>
                        <h2>
                            Check out {{ $appSettings->name }} <span class="special">Pricing Plans!</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center justify-content-md-start">
                @foreach (App\Models\Plan::query()->get() as $plan)
                    <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6 prc-col">
                        <x-frontpage::plan-card :plan="$plan" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- prcing plan end -->

    <!-- call to action begin -->
    <div class="cta" id="cta">
        <div class="container">
            <div class="cta-bg">
                <div
                    class="row justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-center">
                    <div class="col-sm-10 d-xl-flex d-lg-flex d-block align-items-center mx-auto">
                        <div class="cta-text text-center">
                            <h2>We're Always Thinking Something Different</h2>
                            <p>Turn your financial aspirations into reality today. Seize control of your future by
                                opening an account with us. Explore our diverse investment opportunities and begin your
                                journey toward financial independence now.</p>
                            <a href="{{ route('register') }}" class="btn-hyipox-medium cta-btn">
                                Start Investing
                            </a>
                        </div>
                    </div>
                    <div
                        class="col-lg-8 mt-4 mx-auto d-xl-flex d-lg-flex justify-content-end d-block align-items-center">
                        <x-frontpage::tradingview-market-table />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- call to action end -->

    <!-- transaction begin -->
    <div class="transaction" id="transaction">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title section-title-2">
                        <span class="sub-title">
                            Must Meet With
                        </span>
                        <h2>
                            {{ $appSettings->name }}'s recent transaction
                        </h2>
                    </div>
                </div>
            </div>
            <div
                class="row justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-center">
                <div class="col-xl-5 col-lg-5 col-sm-10 col-md-12">
                    <div class="transaction-list">
                        <div class="Vertical-Slider">
                            @foreach (range(1, 7) as $r)
                                <div class="single-transaction">
                                    <div class="flag">
                                        {{-- <img src="/frontpage/oitila/assets/img/flag/flag-2.jpg" alt=""> --}}
                                    </div>
                                    <div class="user-info">
                                        <span class="name">user{{ rand(100, 900) . '***' . rand(100, 900) }}</span>
                                        <span class="tr-type">Trxn:
                                            {{ fake()->randomElement(['Deposit', 'Withdraw']) }}</span>
                                        <span class="tr-date">/ {{ fake()->date() }}</span>
                                        <span class="tr-amount">${{ number_format(rand(5000, 25000), 2) }}</span>
                                    </div>
                                    <div class="coin">
                                        <img src="/frontpage/oitila/assets/img/svg/bitcoin.svg" alt="">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-10 col-md-12 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="part-text">
                        <h2>see all status of our activity</h2>
                        <p>Our transaction list comprises a comprehensive summary of activities executed on our
                            platform. As articulated in our firm's mission, user identities remain anonymized, while
                            transaction dates and times are disclosed. Additionally, it provides recent transaction
                            details from our investors.
                        </p>
                        <p class="marked"><b>Important Notice:</b> Your Past Transaction list serves to document the
                            historical account activity on {{ $appSettings->name }}. Should you require information
                            predating
                            any specified year, the statements will include the corresponding transaction history.</p>
                        <a href="#" class="btn-hyipox-medium cta-btn">Open An Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- transaction end -->

    <!-- choosing reson begin -->
    <div class="about" id="about">
        <div class="container py-5">
            <div
                class="row justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-center">
                <div class="col-xl-6 col-lg-6 col-sm-10">
                    <div class="part-text">
                        <h2>The <span class="special">right place</span> for you to invest money</h2>
                        <p>At {{ $appSettings->name }} your assets are one of the most important things to us,
                            tirelessly
                            cultivated over time. Where you allocate
                            them should be equally intentional.
                            With {{ $appSettings->name }}, your investments can become conduits for change by backing
                            the most
                            innovative entrepreneurs, disruptive startups and diverse funds shaping your future. We aim
                            to be instrumental in shaping our societies and build a legacy that will impact generations.
                        </p>
                        <ul>
                            <li><i class="fas fa-check"></i> Diverse Investment Opportunities</li>
                            <li><i class="fas fa-check"></i> Security and Trust </li>
                            <li><i class="fas fa-check"></i> Expert Guidance</li>
                        </ul>
                        <p>Our platform serves as your comprehensive resource for navigating the dynamic world of
                            investments, whether you are eyeing stocks, cryptocurrencies, or indulging in disruptive
                            innovative investments. We aim to achieve nothing but the best results for you.</p>
                        <a href="{{ route('register') }}" class="btn-hyipox-2">Invest now</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-sm-10 col-md-12">
                    <div class="part-feature">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-sm-12 col-md-6">
                                <div class="single-feature">
                                    <div class="feature-icon">
                                        <img src="/frontpage/oitila/assets/img/svg/solar-energy.svg" alt="">
                                    </div>
                                    <div class="feature-text">
                                        <h3>We Innovate</h3>
                                        <p>We're dedicated to pushing boundaries and exploring new horizons in the
                                            world of finance.
                                            Join us as we redefine the future of investing, one innovative solution
                                            at a time. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-sm-12 col-md-6">
                                <div class="single-feature">
                                    <div class="feature-icon">
                                        <img src="/frontpage/oitila/assets/img/svg/diploma.svg" alt="">
                                    </div>
                                    <div class="feature-text">
                                        <h3>We're Certified</h3>
                                        <p>Our team of certified professionals brings unparalleled expertise and
                                            dedication to every investment opportunity, ensuring that your financial
                                            journey is backed by trust and reliability.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-sm-12 col-md-6">
                                <div class="single-feature">
                                    <div class="feature-icon">
                                        <img src="/frontpage/oitila/assets/img/svg/blockchain.svg" alt="">
                                    </div>
                                    <div class="feature-text">
                                        <h3>We Provide Crypto to Simplicity</h3>
                                        <p>Discover unparalleled ease in navigating investment markets with
                                            {{ $appSettings->name }}. Our cutting-edge AI technology simplifies
                                            investing for
                                            newcomers and seasoned investors alike, efficiently navigating diverse
                                            markets to optimize capital trading. Invest effortlessly with us.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-sm-12 col-md-6">
                                <div class="single-feature">
                                    <div class="feature-icon">
                                        <img src="/frontpage/oitila/assets/img/svg/worldwide.svg" alt="">
                                    </div>
                                    <div class="feature-text">
                                        <h3>Connecting Investors Across the Globe</h3>
                                        <p>With our global presence and diverse community, you'll have access to a
                                            wealth of opportunities and perspectives, empowering you to make
                                            informed investment decisions on a truly international scale. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- choosing reson end -->

    <!-- testimonial begin -->
    <div class="testimonial" id="testimonia">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title">
                        <span class="sub-title">
                            Our Customer Feedback
                        </span>
                        <h2>
                            Clients are<span class="special"> happily Satisfied</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="all-testimonials">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="testi-text-slider">
                            @foreach (app(App\Settings\PageSettings::class)->testimonies as $testimony)
                                <div class="single-testimonial">
                                    <span class="quot-icon">
                                        <img src="/frontpage/oitila/assets/img/icon/quot.png" alt="">
                                    </span>
                                    <p>{{ $testimony['comment'] }}</p>
                                    <div class="part-user">
                                        <span class="user-name">{{ $testimony['title'] }}</span>
                                        <span class="user-location">{{ $testimony['subtitle'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="testi-user-slider">
                            @foreach (app(App\Settings\PageSettings::class)->testimonies as $testimony)
                                <div class="single-user">
                                    <img src="{{ $testimony['image'] ? asset('storage/' . $testimony['image']) : 'https://ui-avatars.com/api/?name=' . $testimony['title'] }}"
                                        alt="Sarah - Entrepreneur">
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial end -->

    <!-- payment gateway begin -->
    <div class="payment-gateway">
        <div class="container">
            <div
                class="row justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-center">
                <div class="col-xl-8 col-lg-8 col-sm-10 col-md-12 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="part-text">
                        <h2>We accepted Local currency, also CryptoCurrencies</h2>
                        <p>Whether you prefer the traditional approach or are embracing the future of finance,
                            we
                            cater to your investment style. Our platform accepts both local currency, ensuring a
                            familiar and convenient funding method, and popular cryptocurrencies. This
                            flexibility
                            allows you to seamlessly integrate your investment strategy with your existing
                            financial
                            ecosystem, be it utilizing established payment channels or leveraging the potential
                            of
                            digital assets. </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-10 col-md-6">
                    <div class="part-crypto">
                        <h3 class="title">for CryptoCurrency payment:</h3>
                        <div class="part-img">
                            <img src="/frontpage/oitila/assets/img/crypto-currency.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-sm-10 col-md-12">
                    <div class="all-payment">
                        <h3 class="title">local payment gateway :</h3>
                        <div class="gateway-slider">
                            <div class="single-payment-way">
                                <img src="/frontpage/oitila/assets/img/brand/brand-1.jpg" alt="">
                            </div>
                            <div class="single-payment-way">
                                <img src="/frontpage/oitila/assets/img/brand/brand-2.jpg" alt="">
                            </div>
                            <div class="single-payment-way">
                                <img src="/frontpage/oitila/assets/img/brand/brand-4.jpg" alt="">
                            </div>
                            <div class="single-payment-way">
                                <img src="/frontpage/oitila/assets/img/brand/brand-3.jpg" alt="">
                            </div>
                            <div class="single-payment-way">
                                <img src="/frontpage/oitila/assets/img/brand/brand-5.jpg" alt="">
                            </div>
                            <div class="single-payment-way">
                                <img src="/frontpage/oitila/assets/img/brand/brand-1.jpg" alt="">
                            </div>
                            <div class="single-payment-way">
                                <img src="/frontpage/oitila/assets/img/brand/brand-3.jpg" alt="">
                            </div>
                            <div class="single-payment-way">
                                <img src="/frontpage/oitila/assets/img/brand/brand-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- payment gateway end -->



    </div> <!-- mobile navbar wrapper end -->
</x-frontpage::layout>
