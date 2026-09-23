<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>About | SL Academy</title><link rel="icon" type="image/png" href="{{ asset('images/logo-01.png') }}">@vite(['resources/css/app.css', 'resources/js/app.js'])</head>
<body>
@include('partials.public-nav')
<main>
<section class="section"><div class="container feature-row"><div><span class="eyebrow">About the academy</span><h1 class="display">Education with a little more <em>electricity.</em></h1><p class="lede">We built SL Academy for the moment after “I should learn that” and before “look what I made.”</p></div><img class="feature-image" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1100&q=85" alt="A diverse group collaborating at a table"></div></section>
<section class="band section"><div class="container"><div class="section-heading"><div><span class="eyebrow">Our point of view</span><h2>Useful beats <em>impressive.</em></h2></div><p>Every lesson should make you want to open your laptop and try something. That is the test.</p></div><div class="stats"><div class="stat"><strong>2019</strong><span>the first cohort</span></div><div class="stat"><strong>3k+</strong><span>learners supported</span></div><div class="stat"><strong>40</strong><span>working mentors</span></div><div class="stat"><strong>1</strong><span>shared obsession</span></div></div></div></section>
<section class="section"><div class="container"><div class="section-heading"><div><span class="eyebrow">The people</span><h2>Good humans<br>make good <em>work.</em></h2></div></div><div class="card-grid">
<article class="course-card"><img class="course-card__image" src="{{ asset('images/mewan.jpeg') }}" alt="Portrait of Mewan Jayathilake"><div class="course-card__body"><span class="course-card__tag">Founder</span><h3>Mewan Jayathilake</h3><p>Turns ambitious ideas into welcoming rooms.</p></div></article>
<article class="course-card"><img class="course-card__image" src="{{ asset('images/maheshika.jpeg') }}" alt="Portrait of Maheshika Dayananda"><div class="course-card__body"><span class="course-card__tag">Head of education</span><h3>Maheshika Dayananda</h3><p>Designs the moments when things click.</p></div></article>
<article class="course-card"><img class="course-card__image" src="{{ asset('images/saman.jpeg') }}" alt="Portrait of Saman Peramuna"><div class="course-card__body"><span class="course-card__tag">Technical director</span><h3>Saman Peramuna</h3><p>Makes the hard stuff feel possible.</p></div></article>
</div></div></section>
</main>
@include('partials.public-footer')
</body>
</html>
