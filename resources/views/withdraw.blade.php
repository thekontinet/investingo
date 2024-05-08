<x-dashboard-layout>
    <div class="nk-content nk-content-lg nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-lg">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><a href="{{ route('dashboard') }}" class="back-to"><em
                                        class="icon ni ni-arrow-left"></em><span>Back to dashboard</span></a></div>
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">Withdraw Funds From Your Wallet</h2>
                            </div>
                        </div>
                    </div><!-- nk-block-head -->
                    <div class="nk-block invest-block">
                        <form action="{{ route('withdraw.store') }}" method="post" class="invest-form">
                            @csrf
                            <div class="row g-gs">
                                <div class="col-lg-7">
                                    <x-money-input name="amount">
                                        <x-slot name='description'>
                                            <x-input-error :messages="$errors->get('amount')" />
                                        </x-slot>
                                    </x-money-input>
                                    <div class="invest-field form-group" x-data>
                                        <div class="form-label-group">
                                            <label class="form-label">Choose Payment Method</label>
                                        </div>
                                        <input type="hidden" name="method" id="invest-choose-wallet" x-ref="input">
                                        <div class="dropdown invest-cc-dropdown">
                                            <button x-ref="selected"
                                                class="invest-cc-chosen dropdown-indicator btn w-100 text-start"
                                                data-bs-toggle="dropdown">
                                                <div class="coin-item">
                                                    <div class="coin-icon">
                                                        <em class="icon ni ni-wallet-alt"></em>
                                                    </div>
                                                    <div class="coin-info">
                                                        <span class="coin-name">Payment Method</span>
                                                        <span class="coin-text">Choose a Payment Method</span>
                                                    </div>
                                                </div>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
                                                <ul class="invest-cc-list">
                                                    @foreach ($payMethod as $method)
                                                        <li class="invest-cc-item selected">
                                                            <button type="button"
                                                                class="invest-cc-opt btn w-100 text-start"
                                                                data-plan="silver" value="{{ $method->id }}"
                                                                x-on:click="
                                                                    $refs.selected.innerHTML = $el.innerHTML;
                                                                    $refs.input.value = $el.value
                                                                ">
                                                                <div class="coin-item">
                                                                    <div class="coin-icon">
                                                                        <img width="30px"
                                                                            src="{{ $method->image_url }}"
                                                                            alt="Icon">
                                                                    </div>
                                                                    <div class="coin-info">
                                                                        <span
                                                                            class="coin-name">{{ $method->name }}</span>
                                                                        <span class="coin-text">Current Price:
                                                                            {{ $method->symbol }} (
                                                                            {{ $method->price }} )</span>
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </li><!-- .invest-cc-item -->
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div><!-- .dropdown -->
                                        <x-input-error :messages="$errors->get('method')" />
                                    </div><!-- .invest-field -->
                                    <div class="form-group">
                                        <input type="text" name="wallet_address"
                                            class="form-control form-control-amount form-control-lg"
                                            placeholder="Wallet Address">
                                        <x-input-error :messages="$errors->get('wallet_address')" />
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary">Submit</button>
                                    </div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </form>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
