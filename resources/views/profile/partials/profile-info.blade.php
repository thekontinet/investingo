<div class="nk-block">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h5 class="nk-block-title">Personal Information</h5>
            <div class="nk-block-des">
                <p>Basic info, like your name and address, that you use on Nio Platform.</p>
            </div>
        </div>
    </div><!-- .nk-block-head -->
    <div class="card card-bordered">
        <div class="nk-data data-list">
            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                <div class="data-col">
                    <span class="data-label">Full Name</span>
                    <span class="data-value">{{ $user->name }}</span>
                </div>
                <div class="data-col data-col-end"><span class="data-more"><em
                            class="icon ni ni-forward-ios"></em></span></div>
            </div>
            <div class="data-item">
                <div class="data-col">
                    <span class="data-label">Email</span>
                    <span class="data-value">{{ $user->email }}</span>
                </div>
                <div class="data-col data-col-end"><span class="data-more disable"><em
                            class="icon ni ni-lock-alt"></em></span></div>
            </div>
            <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                <div class="data-col">
                    <span class="data-label">Phone Number</span>
                    <span class="data-value text-soft">{{ $user->phone ?? 'Not added yet' }}</span>
                </div>
                <div class="data-col data-col-end"><span class="data-more"><em
                            class="icon ni ni-forward-ios"></em></span></div>
            </div>
        </div><!-- .nk-data -->
    </div><!-- .card -->

    @include('profile.partials.edit-profile-modal')
</div>
