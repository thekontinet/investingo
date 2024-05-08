<x-auth-layout>
    <div class="nk-block nk-block-middle nk-auth-body">
        <div class="brand-logo pb-5">
            <x-application-logo />
        </div>
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h5 class="nk-block-title">Register</h5>
                <div class="nk-block-des">
                    <p>Create New Account</p>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <form action="{{ route('register') }}" method="post" class="form-validate is-alter" autocomplete="off">
            @csrf
            <input type="hidden" name="referred_by" value="{{ $referrer }}">
            <div class="form-group">
                <x-input-label class="form-label" for="Name">Name</x-input-label>
                <x-text-input type="text" class="form-control form-control-lg" name="name" id="name"
                    placeholder="John Doe" autocomplete="off" required error="{{ $errors->has('name') }}" />
                <x-input-error :messages="$errors->get('name')" />
            </div><!-- .form-group -->
            <div class="form-group">
                <x-input-label class="form-label" for="email-address">Email</x-input-label>
                <x-text-input type="text" class="form-control form-control-lg" name="email" id="email-address"
                    placeholder="Enter your email address" autocomplete="off" required
                    error="{{ $errors->has('email') }}" />
                <x-input-error :messages="$errors->get('email')" />
            </div><!-- .form-group -->
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
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
                <label class="form-label text-muted" for="checkbox">By submitting the form, you've agreed to our
                    privacy policy and terms</label>
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block">Create Account</button>
            </div>
        </form><!-- form -->
        <div class="form-note-s2 pt-4"> Already have an account ? <a href="{{ route('login') }}">Sign in Instead</a>
        </div>
    </div><!-- .nk-block -->
</x-auth-layout>
