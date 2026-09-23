<footer class="site-footer">
    <div class="site-footer__top">
        <a class="brand brand--light" href="{{ url('/') }}">
            <img class="brand__logo" src="{{ asset('images/logo-01.png') }}" alt="SL Academy">
        </a>
        <p>Learn loudly. Build bravely.<br>Make your next chapter count.</p>
        <a class="footer-arrow" href="{{ url('contact') }}" aria-label="Contact SL Academy">↗</a>
    </div>
    <div class="site-footer__bottom">
        <span>© {{ date('Y') }} SL Academy</span>
        <span>373/28 Ranmal Uyana, Homagama</span>
        <span>info@slacademy.com</span>
    </div>
</footer>
