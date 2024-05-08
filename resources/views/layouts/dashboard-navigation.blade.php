<!-- main header @s -->
<div class="nk-header nk-header-fluid nk-header-fixed is-theme">
    <div class="container-xl wide-lg">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger me-sm-2 d-lg-none">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em
                        class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand">
                <x-application-logo />
            </div><!-- .nk-header-brand -->
            <div class="nk-header-menu" data-content="headerNav">
                <div class="nk-header-mobile">
                    <div class="nk-header-brand">
                        <x-application-logo />
                    </div>
                    <div class="nk-menu-trigger me-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em
                                class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
                <!-- Menu -->
                <ul class="nk-menu nk-menu-main">
                    <li class="nk-menu-item">
                        <a href="{{ route('dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('plans.index') }}" class="nk-menu-link">
                            <span class="nk-menu-text">Invest</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('invest.index') }}" class="nk-menu-link">
                            <span class="nk-menu-text">My Plan</span>
                        </a>
                    </li>
                    <li class="nk-menu-item active has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-text">More</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('transactions.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">Transactions</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!-- .nk-header-menu -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown user-dropdown order-sm-first">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-xl-block">
                                    <div class="user-name dropdown-indicator">{{ auth()->user()->name }}</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1 is-light">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>{{ auth()->user()->initials }}</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">{{ auth()->user()->name }}</span>
                                        <span class="sub-text">{{ auth()->user()->email }}</span>
                                    </div>
                                    <div class="user-action">
                                        <a class="btn btn-icon me-n2" href="{{ route('profile.edit') }}"><em
                                                class="icon ni ni-setting"></em></a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ route('profile.edit') }}"><em
                                                class="icon ni ni-user-alt"></em><span>View
                                                Profile</span></a></li>
                                    <li><a href="{{ route('profile.settings') }}"><em
                                                class="icon ni ni-setting-alt"></em><span>Account
                                                Setting</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                        <button class="btn btn-primary" form="logout-form">
                                            <em class="icon ni ni-signout"></em><span>Sign out</span>
                                        </button>
                                    </li>
                                    <form action="{{ route('logout') }}" method="post" id="logout-form">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </li><!-- .dropdown -->
                </ul><!-- .nk-quick-nav -->
            </div><!-- .nk-header-tools -->
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>
<!-- main header @e -->
