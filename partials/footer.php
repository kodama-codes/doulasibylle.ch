<footer>
    <div class="wide center">
        <p style="margin:0">© <span id="year"></span> Doula Sibylle</p>
        <p class="muted" style="margin:.2rem 0 0">Trainee im
            <a href="https://wombexpansion.com/" target="_blank" rel="noopener">Womb Expansion Doula
                Course</a>
        </p>
    </div>
</footer>

<a href="#top" id="toTop" class="toTop" aria-label="Nach oben">
    ↑
</a>

<script>
    const obs = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('in');
                obs.unobserve(e.target);
            }
        })
    }, {threshold: 0.12});
    document.querySelectorAll('.reveal').forEach(el => obs.observe(el));

    document.getElementById('year').textContent = new Date().getFullYear();

    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', (e) => {
            const id = a.getAttribute('href').slice(1);
            if (!id) return;
            const el = document.getElementById(id);
            if (el) {
                e.preventDefault();
                el.scrollIntoView({behavior: 'smooth', block: 'start'});
            }
        });
    });

    const burger = document.getElementById('burger');
    const nav = document.getElementById('mainnav');
    const toggleMenu = (open) => {
        const expanded = open ?? (burger.getAttribute('aria-expanded') !== 'true');
        burger.setAttribute('aria-expanded', expanded);
        nav.classList.toggle('open', expanded);
        if (expanded) {
            const first = nav.querySelector('a');
            if (first) first.focus({preventScroll: true});
        } else {
            burger.focus({preventScroll: true});
        }
    };
    burger.addEventListener('click', () => toggleMenu());

    nav.addEventListener('click', (e) => {
        if (e.target.tagName === 'A' && window.matchMedia('(max-width: 900px)').matches) {
            toggleMenu(false);
        }
    });

    const toTop = document.getElementById('toTop');
    const navObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                toTop.classList.remove('show');
            } else {
                toTop.classList.add('show');
            }
        });
    }, {threshold: 0});
    navObserver.observe(nav);

    const topAnchor = document.createElement('div');
    topAnchor.id = 'top';
    document.body.prepend(topAnchor);
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Doula Sibylle",
        "description": "Doula-Begleitung vor, während und nach der Geburt.",
        "url": "https://doulasibylle.ch",
        "image": [
            "logo_round.png"
        ],
        "areaServed": "Schweiz",
        "sameAs": [
            "https://instagram.com/"
        ]
    }
</script>
