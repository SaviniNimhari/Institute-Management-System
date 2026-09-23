<x-guest-layout>
    <a class="brand" href="{{ url('/') }}"><img class="brand__logo" src="{{ asset('images/logo-01.png') }}" alt="SL Academy"></a>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <h2>Welcome back.</h2>
    <p>Sign in to continue your learning arc.</p>

    <form method="POST" action="{{ route('login') }}">
        @csrf

            <!-- Email Address -->
        <label for="email">Email address</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
        <x-input-error :messages="$errors->get('email')" class="error" />

            <!-- Password -->
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required autocomplete="current-password">
        <x-input-error :messages="$errors->get('password')" class="error" />

            <!-- Remember Me -->
        <div class="remember">
            <label for="remember_me" class="remember">
                <input id="remember_me" type="checkbox" name="remember">
                <span>{{ __('Remember me') }}</span>
            </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
        </div>

            <!-- Submit -->
        <button class="button button--lime" type="submit">{{ __('Enter the studio') }} <span aria-hidden="true">↗</span></button>
    </form>
</x-guest-layout>
