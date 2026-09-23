<nav class="site-nav">
    <div class="site-nav__inner">
        <a class="brand" href="{{ url('/') }}">
            <img class="brand__logo" src="{{ asset('images/logo-01.png') }}" alt="SL Academy">
        </a>
        <div class="nav-links">
            <a href="{{ route('dashboard') }}" class="is-active">My studio</a>
            <a href="{{ url('courses') }}">Explore courses</a>
            <a href="{{ url('contact') }}">Support</a>
        </div>
        <button class="theme-toggle" type="button" data-theme-toggle aria-label="Switch to dark mode" title="Switch color mode"><span class="theme-toggle__sun" aria-hidden="true">☀</span><span class="theme-toggle__moon" aria-hidden="true">☾</span></button>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="nav-login" type="submit">Log out <span>↗</span></button>
        </form>
    </div>
</nav>
