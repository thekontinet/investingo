<div class="nk-block">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h5 class="nk-block-title">Security Settings</h5>
            <div class="nk-block-des">
                <p>These settings are helps you keep your account secure.</p>
            </div>
        </div>
    </div><!-- .nk-block-head -->
    <div class="card card-bordered">
        <div class="card-inner-group">
            <div class="card-inner">
                <div class="nk-block-text mb-4">
                    <h6>Update Password</h6>
                    <p>Set a unique password to protect your account.</p>
                    <x-auth-session-status :status="session('status') ? 'Password has been updated' : null" />
                </div>
                <div class="nk-block-content">
                    <form action="{{ route('password.update') }}" method="post" class="w-100">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <x-input-label for='current_password'>Current Password</x-input-label>
                            <x-text-input type='password' class="form-control-lg" name="current_password"
                                id="current_password" placeholder='Enter Your Current Password' :error="$errors->updatePassword->has('current_password')" />
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" />
                        </div>
                        <div class="form-group">
                            <x-input-label for='password'>New Password</x-input-label>
                            <x-text-input type='password' class="form-control-lg" name="password" id="password"
                                placeholder='Enter Your New Password' :error="$errors->updatePassword->has('password')" />
                            <x-input-error :messages="$errors->updatePassword->get('password')" />
                        </div>
                        <div class="form-group">
                            <x-input-label for='password_confirmation'>Confirm Password</x-input-label>
                            <x-text-input type='password' class="form-control-lg" name="password_confirmation"
                                id="password_confirmation" placeholder='Enter Password Again' :error="$errors->updatePassword->has('password_confirmation')" />
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" />
                        </div>
                        <div class="form-group">
                            <button class='btn btn-primary'>Update Password</button>
                        </div>
                    </form>
                </div>
            </div><!-- .card-inner -->
            <div class="card-inner">
                <div class="between-center flex-wrap flex-md-nowrap g-3">
                    <div class="nk-block-text">
                        <h6>2FA Authentication <span class="badge bg-success">Enabled</span></h6>
                        <p>Secure your account with 2FA security. When it is activated you will need to enter not only
                            your password, but also a special code using app. You can receive this code by in mobile
                            app. </p>
                    </div>
                    <div class="nk-block-actions">
                        <a href="#" class="btn btn-primary">Disable</a>
                    </div>
                </div>
            </div><!-- .card-inner -->
        </div><!-- .card-inner-group -->
    </div><!-- .card -->

    @include('profile.partials.edit-profile-modal')
</div>
