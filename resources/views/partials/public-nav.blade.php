<nav class="site-nav" aria-label="Primary navigation">
    <div class="site-nav__inner">
        <a class="brand" href="{{ url('/') }}" aria-label="SL Academy home">
            <img class="brand__logo" src="{{ asset('images/logo-01.png') }}" alt="SL Academy">
        </a>
        <div class="nav-links">
            <a class="{{ request()->is('/') ? 'is-active' : '' }}" href="{{ url('/') }}">Home</a>
            <a class="{{ request()->is('courses') ? 'is-active' : '' }}" href="{{ url('courses') }}">Courses</a>
            <a class="{{ request()->is('about') ? 'is-active' : '' }}" href="{{ url('about') }}">About</a>
            <a class="{{ request()->is('contact') ? 'is-active' : '' }}" href="{{ url('contact') }}">Contact</a>
        </div>
        <button class="theme-toggle" type="button" data-theme-toggle aria-label="Switch to dark mode" title="Switch color mode"><span class="theme-toggle__sun" aria-hidden="true">☀</span><span class="theme-toggle__moon" aria-hidden="true">☾</span></button>
        <a class="nav-login" href="{{ route('login') }}">Log in <span aria-hidden="true">↗</span></a>
    </div>
</nav>
