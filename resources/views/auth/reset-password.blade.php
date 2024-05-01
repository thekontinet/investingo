<x-auth-layout>
    <div class="nk-block nk-block-middle nk-auth-body">
        <div class="brand-logo pb-5">
            <x-application-logo />
        </div>
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h5 class="nk-block-title">Create Password</h5>
                <div class="nk-block-des">
                    <p>Create a new password for your account.</p>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <form action="{{ route('password.store') }}" method="post" class="form-validate is-alter" autocomplete="off">
            @csrf


            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="form-group">
                <x-input-label class="form-label" for="email-address">Email</x-input-label>
                <x-text-input type="text" class="form-control form-control-lg" name="email" id="email-address"
                    placeholder="Enter your email address" autocomplete="off" :value="old('email', $request->email)" required
                    error="{{ $errors->has('email') }}" />
                <x-input-error :messages="$errors->get('email')" />
            </div><!-- .form-group -->
            <div class="form-group">
                <div class="form-label-group">
                    <label class="form-label" for="password">New Password</label>
                </div>
                <div class="form-control-wrap">
                    <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg"
                        data-target="password">
                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                    </a>
                    <x-text-input autocomplete="new-password" type="password" class="form-control form-control-lg"
                        required name="password" id="password" placeholder="Enter your new password"
                        :error="$errors->has('password')" />
                </div>
                <x-input-error :messages="$errors->get('password')" />
            </div><!-- .form-group -->
            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block">Update Password</button>
            </div>
        </form><!-- form -->
    </div><!-- .nk-block -->
</x-auth-layout>
