<x-dashboard-layout>
    <!-- content @s -->
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><span>My Profile</span></div>
                            <h2 class="nk-block-title fw-normal">Account Info</h2>
                            <div class="nk-block-des">
                                <p>You have full control to manage your own account setting. <span
                                        class="text-primary"><em class="icon ni ni-info"></em></span></p>
                            </div>
                        </div>
                    </div>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.edit') }}">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.settings') }}">Security<span
                                    class="d-none s-sm-inline"> Setting</span></a>
                        </li>

                    </ul><!-- .nav-tabs -->
                    @if (request()->routeIs('profile.edit'))
                        @include('profile.partials.profile-info')
                    @elseif (request()->routeIs('profile.settings'))
                        @include('profile.partials.profile-settings')
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
</x-dashboard-layout>
