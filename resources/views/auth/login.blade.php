<x-auth-layout>
    <div class="nk-block nk-block-middle nk-auth-body">
        <div class="brand-logo pb-5">
            <x-application-logo />
        </div>
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h5 class="nk-block-title">Login</h5>
                <div class="nk-block-des">
                    <p>Access your account using your email and passcode.</p>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <form action="{{ route('login') }}" method="post" class="form-validate is-alter" autocomplete="off">
            @csrf
            <div class="form-group">
                <x-input-label class="form-label" for="email-address">Email</x-input-label>
                <x-text-input type="text" class="form-control form-control-lg" name="email" id="email-address"
                    placeholder="Enter your email address" autocomplete="off" required
                    error="{{ $errors->has('email') }}" />
                <x-input-error :messages="$errors->get('email')" />
            </div><!-- .form-group -->
            <div class="form-group">
                <div class="form-label-group">
                    <label class="form-label" for="password">Password</label>
                    <a class="link link-primary link-sm" tabindex="-1" href="{{ route('password.request') }}">Can't
                        remember password ?</a>
                </div>
                <div class="form-control-wrap">
                    <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg"
                        data-target="password">
                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                    </a>
                    <x-text-input autocomplete="new-password" type="password" class="form-control form-control-lg"
                        required name="password" id="password" placeholder="Enter your password" :error="$errors->has('password')" />
                </div>
                <x-input-error :messages="$errors->get('password')" />
            </div><!-- .form-group -->
            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block">Login Now</button>
            </div>
        </form><!-- form -->
        <div class="form-note-s2 pt-4"> Dont have an account with us ? <a href="{{ route('register') }}">Create an
                account</a>
        </div>
    </div><!-- .nk-block -->
</x-auth-layout>
