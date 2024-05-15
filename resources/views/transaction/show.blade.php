<x-dashboard-layout>
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="card card-bordered ms-lg-4 ms-xl-0">
                <div class="nk-iv-wg4">
                    <div class="nk-iv-wg4-sub">
                        <h6 class="nk-iv-wg4-title title">Your Transaction Details</h6>
                        <ul class="nk-iv-wg4-overview g-2">
                            <li>
                                <div class="sub-text">Account Name</div>
                                <div class="lead-text">{{ $transaction->payable->name }}</div>
                            </li>
                            <li>
                                <div class="sub-text">Creation Date</div>
                                <div class="lead-text">{{ $transaction->created_at->diffForHumans() }}</div>
                            </li>
                            <li>
                                <div class="sub-text">Amount</div>
                                <div class="lead-text">{{ money($transaction->amount) }}</div>
                            </li>
                            <li>
                                <div class="sub-text">Status</div>
                                <div class="lead-text">
                                    @if ($transaction->confirmed)
                                        <span class="badge bg-success">confirmed</span>
                                    @else
                                        <span class="badge bg-warning">Pending</span>
                                    @endif
                                </div>
                            </li>
                        </ul>
                    </div><!-- .nk-iv-wg4-sub -->
                    <div class="nk-iv-wg4-sub">
                        <ul class="nk-iv-wg4-list">
                            <li>
                                <div class="sub-text">Payment Method</div>
                                <div class="lead-text"><img class="me-1 img"
                                        src="{{ $transaction->method->asset->image_url }}"
                                        width="20px" />{{ $transaction->method->asset->name }}
                                </div>
                            </li>
                        </ul>
                    </div><!-- .nk-iv-wg4-sub -->
                    @if (!$transaction->confirmed)
                        <div class="nk-iv-wg4-sub">
                            <ul class="nk-iv-wg4-list">
                                <li>
                                    <div class="text-center w-100">
                                        <img class="mx-auto img-thumbnail"
                                            src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ $transaction->method->address }}"
                                            alt="" lazy>
                                        <p class="mt-4 fw-bold">Wallet Address</p>
                                        <p style="font-size: 24px" class="text-dark text-center">
                                            {{ $transaction->method->address }}</p>
                                    </div>
                                </li>
                                <li>
                                    <button class="btn btn-link mx-auto" x-data="{ text: @js($transaction->method->address) }"
                                        @click="
                                await navigator.clipboard.writeText(text);
                                    alert('Content copied to clipboard');
                            ">Copy
                                        Address</button>
                                </li>
                                <li>
                                    <p class="text-muted mx-auto">Sending Funds or token to this address other than
                                        <span
                                            class="text-primary fw-bold">{{ $transaction->method->asset->symbol }}</span>
                                        may lead to loss of funds
                                    </p>
                                </li>
                            </ul>
                        </div><!-- .nk-iv-wg4-sub -->
                        <div class="nk-iv-wg4-sub text-center bg-lighter">
                            <h5>Tips</h5>
                            <ul class="list-group">
                                <li class="list-group-item">Account will be credited after all network confirmation</li>
                                <li class="list-group-item">Ensure you make transfer to the exact wallet address</li>
                                <li class="list-group-item">Deposit the exact <span
                                        class="text-primary fw-bold">{{ $transaction->method->asset->symbol }}</span>
                                    amount
                                </li>
                            </ul>
                        </div><!-- .nk-iv-wg4-sub -->
                    @endif
                </div><!-- .nk-iv-wg4 -->
            </div><!-- .card -->
        </div><!-- .col -->
    </div>
</x-dashboard-layout>
