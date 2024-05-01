<x-auth-layout>
    <div class="nk-block nk-block-middle nk-auth-body">
        <div class="brand-logo pb-5">
            <x-application-logo />
        </div>
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h5 class="nk-block-title">Forgot Password</h5>
                <div class="nk-block-des">
                    <p>Provide your email, let us help you recover your password.</p>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form action="{{ route('password.email') }}" method="post" class="form-validate is-alter" autocomplete="off">
            @csrf
            <div class="form-group">
                <x-input-label class="form-label" for="email-address">Email</x-input-label>
                <x-text-input type="text" class="form-control form-control-lg" name="email" id="email-address"
                    placeholder="Enter your email address" autocomplete="off" required
                    error="{{ $errors->has('email') }}" />
                <x-input-error :messages="$errors->get('email')" />
            </div><!-- .form-group -->
            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block">Send Me Password Link</button>
            </div>
        </form><!-- form -->
        <div class="form-note-s2 pt-4"> Take me back to <a href="{{ route('login') }}">Login</a>
        </div>
    </div><!-- .nk-block -->
</x-auth-layout>
