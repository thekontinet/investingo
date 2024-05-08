<x-dashboard-layout>
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><span>My Plan</span></div>
                            <div class="nk-block-between-md g-4">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title fw-normal">Your Investments</h2>
                                    <div class="nk-block-des">
                                        <p>Here is a list of all your investments</p>
                                    </div>
                                </div><!-- .nk-block-head-content -->
                                <div class="nk-block-head-content">
                                    <ul class="nk-block-tools gx-3">
                                        <li><a href="{{ route('plans.index') }}"
                                                class="btn btn-white btn-light"><span>Invest More</span>
                                                <em
                                                    class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a>
                                        </li>
                                        {{-- <li class="opt-menu-md dropdown">
                                            <a href="#" class="btn btn-white btn-light btn-icon"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-setting"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="#"><em
                                                                class="icon ni ni-coin-alt"></em><span>Curreny
                                                                Settings</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-notify"></em><span>Push
                                                                Notification</span></a></li>
                                                </ul>
                                            </div>
                                        </li> --}}
                                    </ul>
                                </div><!-- .nk-block-head-content -->
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->

                    <div class="nk-block nk-block-lg">
                        <div class="nk-iv-scheme-list">
                            @foreach ($activeInvestments as $investment)
                                <x-invest.list-item :investment="$investment" />
                            @endforeach
                        </div><!-- .nk-iv-scheme-list -->

                        {{ $activeInvestments->links() }}
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
