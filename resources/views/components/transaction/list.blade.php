@props(['transactions'])
<div class="card-inner p-0">
    <div class="nk-tb-list nk-tb-tnx">
        <div class="nk-tb-item nk-tb-head">
            <div class="nk-tb-col"><span>Details</span></div>
            <div class="nk-tb-col tb-col-lg"><span>Wallet</span></div>
            <div class="nk-tb-col text-end"><span>Amount</span></div>
            <div class="nk-tb-col nk-tb-col-status"><span class="sub-text d-none d-md-block">Status</span></div>
        </div><!-- .nk-tb-item -->
        @foreach ($transactions as $transaction)
            <div class="nk-tb-item">
                <div class="nk-tb-col">
                    <div class="nk-tnx-type">
                        <div class="nk-tnx-type-icon bg-success-dim text-success">
                            <em class="icon ni ni-arrow-up-right"></em>
                        </div>
                        <div class="nk-tnx-type-text">
                            <span class="tb-lead">{{ $transaction->description }}</span>
                            <span class="tb-date">{{ $transaction->created_at->format('d/m/Y h:i a') }}</span>
                        </div>
                    </div>
                </div>
                <div class="nk-tb-col tb-col-lg">
                    <span class="tb-lead-sub">{{ $transaction->wallet->name }}</span>
                    <span
                        class="badge badge-dot {{ $transaction->type === 'deposit' ? 'bg-success' : 'bg-danger' }}">{{ ucfirst($transaction->type) }}</span>
                </div>
                <div class="nk-tb-col text-end">
                    <span class="tb-amount">{{ money(abs($transaction->amount)) }}</span>
                    <span class="tb-amount-sm">value</span>
                </div>
                <div class="nk-tb-col nk-tb-col-status">
                    @if ($transaction->confirmed)
                        <div class="dot dot-success d-md-none"></div>
                        <span
                            class="badge badge-sm badge-dim bg-outline-success d-none d-md-inline-flex">Completed</span>
                    @else
                        <div class="dot dot-warning d-md-none"></div>
                        <span
                            class="badge badge-sm badge-dim bg-outline-warning d-none d-md-inline-flex">Upcoming</span>
                    @endif
                </div>
            </div><!-- .nk-tb-item -->
        @endforeach
    </div><!-- .nk-tb-list -->
</div><!-- .card-inner -->
