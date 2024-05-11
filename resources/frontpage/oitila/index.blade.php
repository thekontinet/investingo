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
    <div class="about" id="about">
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
                                <p>Register for an account. It's totally easy and free</p>
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
                                <p>Make first deposit and choose your investment plan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                        <div class="single-system">
                            <div class="part-icon">
                                <img src="/frontpage/oitila/assets/img/svg/money-bag.svg" alt="">
                            </div>
                            <div class="part-text">
                                <h4 class="title">Get Withdraw</h4>
                                <p>Request for the withdrawal and receive a payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div
                class="row justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-center">
                <div class="col-xl-6 col-lg-6 col-sm-10">
                    <div class="part-text">
                        <h2>The <span class="special">right place</span> for you to invest money</h2>
                        <p>At Investomo, we believe in empowering individuals to harness the potential of the
                            financial markets to achieve their wealth goals.</p>
                        <ul>
                            <li><i class="fas fa-check"></i> Diverse Investment Opportunities</li>
                            <li><i class="fas fa-check"></i> Security and Trust </li>
                            <li><i class="fas fa-check"></i> Expert Guildiance</li>
                        </ul>
                        <p> Our platform serves as your
                            comprehensive resource for navigating the dynamic world of investments, whether you're
                            eyeing stocks, cryptocurrencies, or indulging in luxury investments.</p>
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
                                        <h3>We Provide Crypto</h3>
                                        <p>Whether you're a seasoned crypto enthusiast or a newcomer to the digital
                                            asset space, our platform provides the tools and support you need to
                                            capitalize on this exciting frontier of finance. </p>
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
                            Check out {{ $appSettings->name }}'s <span class="special">Pricing Plans!</span>
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
                            <p>Don't let your financial dreams remain just that – dreams. Take charge of your future
                                and start growing your wealth today. Open an account, explore the exciting
                                investment possibilities we offer, and embark on a journey towards financial
                                independence.</p>
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

    <!-- team begin -->
    <div class="team" id="team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title">
                        <span class="sub-title">
                            Uppermost Investments
                        </span>
                        <h2>
                            Meet with our<span class="special"> Top Investors</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-member">
                        <div class="img-box">
                            <div class="part-img">
                                <a href="#" class="view-btn">
                                    <i class="far fa-eye"></i>
                                </a>
                                <img src="/frontpage/oitila/assets/img/member-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="part-text">
                            <span class="name">Charles Bukowski</span>
                            <span class="invested-amount">Invested : $252.00k</span>
                            <div class="paid-from">
                                Paid from :
                                <span class="paymethod-logo">
                                    <img src="/frontpage/oitila/assets/img/bitcoin.png" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-member">
                        <div class="img-box">
                            <div class="part-img">
                                <a href="#" class="view-btn">
                                    <i class="far fa-eye"></i>
                                </a>
                                <img src="/frontpage/oitila/assets/img/member-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="part-text">
                            <span class="name">John Doe Jr</span>
                            <span class="invested-amount">Invested : $252.00k</span>
                            <div class="paid-from">
                                Paid from :
                                <span class="paymethod-logo">
                                    <img src="/frontpage/oitila/assets/img/litecoincoin.png" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-member">
                        <div class="img-box">
                            <div class="part-img">
                                <a href="#" class="view-btn">
                                    <i class="far fa-eye"></i>
                                </a>
                                <img src="/frontpage/oitila/assets/img/member-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="part-text">
                            <span class="name">Bukowski Charles </span>
                            <span class="invested-amount">Invested : $252.00k</span>
                            <div class="paid-from">
                                Paid from :
                                <span class="paymethod-logo">
                                    <img src="/frontpage/oitila/assets/img/bitcoin.png" alt="">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team end -->

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
                                        <span class="name">{{ fake()->name() }}</span>
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
                        <p>Recent transaction list contains a summary of a recent transaction, as like the user and
                            the
                            date, time processed, and transaction status. It also shows rencent transaction
                            information from our investors.</p>
                        <p class="marked"><b>Important:</b> Your Past Transactions list will show the past history
                            in account activity on {{ $appSettings->name }}. If you need information prior to the
                            any year of the
                            past, the statements will attach the past transaction history.</p>
                        <a href="#" class="btn-hyipox-medium cta-btn">Open An Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- transaction end -->

    <!-- choosing reson begin -->
    <div class="choosing-reason" id="reason">
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
                                        <p>Get your payment instantly through requesting it! We don't take
                                            percentage</p>
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
                                        <p>Promote {{ $appSettings->name }} and earn unlimited referral commission
                                            from each referral
                                            links</p>
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
                                        <p>Our affiliate program is a great way to grow your earning. It's more easy
                                            to join with us</p>
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
                                            your investment is totally secured</p>
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
                                        <p>We provide 24/7 friendly support in {{ $appSettings->name }}. We're
                                            always responsible to
                                            take care</p>
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
                            <div class="single-testimonial">
                                <span class="quot-icon">
                                    <img src="/frontpage/oitila/assets/img/icon/quot.png" alt="">
                                </span>
                                <p>"{{ $appSettings->name }} has been a game-changer for me. I used to be
                                    intimidated by investing,
                                    but their user-friendly platform and variety of options made it easy to get
                                    started. Now, I can invest my business profits in a way that actually grows my
                                    wealth. Highly recommend!"</p>
                                <div class="part-user">
                                    <span class="user-name">Sarah, Entrepreneur</span>
                                    <span class="user-location">San Francisco, CA</span>
                                </div>
                            </div>

                            <div class="single-testimonial">
                                <span class="quot-icon">
                                    <img src="/frontpage/oitila/assets/img/icon/quot.png" alt="">
                                </span>
                                <p>"I love the flexibility {{ $appSettings->name }} offers. I can invest in
                                    traditional stocks with my
                                    regular currency, but I can also use some of my cryptocurrency holdings to
                                    explore the world of luxury assets. It's a great way to diversify my portfolio
                                    and keep things interesting."</p>
                                <div class="part-user">
                                    <span class="user-name">David, Tech Professional</span>
                                    <span class="user-location">New York, NY</span>
                                </div>
                            </div>

                            <div class="single-testimonial">
                                <span class="quot-icon">
                                    <img src="/frontpage/oitila/assets/img/icon/quot.png" alt="">
                                </span>
                                <p>"As a teacher, I don't have a ton of disposable income. But
                                    {{ $appSettings->name }}'s curated
                                    investment plans allowed me to start investing with a small amount and choose a
                                    plan that aligns with my long-term goals. It's a great way to save for the
                                    future, even on a limited budget."</p>
                                <div class="part-user">
                                    <span class="user-name">Maria, Teacher</span>
                                    <span class="user-location">Chicago, IL</span>
                                </div>
                            </div>
                        </div>
                        <div class="testi-user-slider">
                            <div class="single-user">
                                <img src="/frontpage/oitila/assets/img/testimonial.png" alt="Sarah - Entrepreneur">
                            </div>
                            <div class="single-user">
                                <img src="/frontpage/oitila/assets/img/testimonia-2.png"
                                    alt="David - Tech Professional">
                            </div>
                            <div class="single-user">
                                <img src="/frontpage/oitila/assets/img/testimonia-3.png" alt="Maria - Teacher">
                            </div>
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
