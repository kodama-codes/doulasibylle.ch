<?php /* Bootstrap One-Pager Rewrite (scroll fixes + tunable condense speed) */ ?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doula | One Pager</title>

    <!-- Schriftart wie im Original -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
          rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          rel="stylesheet">
    <!--    <link rel="stylesheet" href="/style.css">-->


    <style>
        :root {
            --primary: #D8A7A7;
            --secondary: #F7F1F1;
            --accent: #A56C6C;
            --text: #3D3D3D;
        }

        html, body {
            /* Use JS-driven smooth scrolling to avoid double easing/offset bugs */
            scroll-behavior: auto;
            font-family: 'Poppins', sans-serif;
            color: var(--text);
        }

        /* NAVBAR */
        .navbar {
            background-color: var(--secondary);
        }

        .navbar .nav-link {
            font-weight: 500;
        }

        .navbar .nav-link.active, .navbar .nav-link:hover {
            color: var(--accent);
        }

        .navbar-brand.logo {
            display: inline-flex;
            align-items: center;
            gap: .6rem;
            font-size: 1.6rem;
            font-weight: 600;
            color: var(--accent);
            text-decoration: none;
        }

        .navbar-brand.logo img {
            border-radius: 50%;
        }

        /* HEADINGS */
        section h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: var(--accent);
            font-weight: 600;
        }

        /* SECTIONS volle Breite */
        section.section, header.section {
            width: 100%;
            padding: 5rem 0;
        }

        /* HERO */
        .hero-title {
            color: var(--accent);
        }

        .hero-round {
            width: 300px;
            height: auto;
            filter: drop-shadow(0 0 5px rgba(0, 0, 0, 0.3));
        }

        .btn-accent {
            background: var(--accent);
            color: #fff;
            border: 0;
        }

        .btn-accent:hover {
            background: var(--primary);
            color: #fff;
        }

        /* Hintergründe */
        .bg-soft {
            background-color: var(--secondary);
        }

        .bg-white {
            background-color: #fff;
        }

        /* Container immer zentriert */
        .section > .container, header > .container {
            max-width: 1140px;
        }

        /* Footer */
        footer {
            background: var(--accent);
            color: #fff;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .maxw-700 {
            max-width: 700px;
        }

        .maxw-900 {
            max-width: 900px;
        }

        /* Centered stacked navbar layout tweaks */
        #mainNav .navbar-brand.logo span { white-space: nowrap; }
        @media (min-width: 992px) {
            #mainNav .navbar-collapse { display: block !important; }
        }

        /* Condensed navbar behavior */
        #mainNav { transition: padding .25s ease-in-out, background-color .2s ease-in-out; --c: 0; }
        #mainNav .container.flex-column { transition: padding .25s ease-in-out; }
        #mainNav .brand-row { display: flex; align-items: center; justify-content: center; position: relative; padding-top: .6rem; padding-bottom: .6rem; transition: padding .25s ease-in-out; }
        #mainNav.condensed .brand-row { padding-top: .15rem; padding-bottom: .15rem; }
        #mainNav .navbar-brand.logo img { width: 52px; height: 52px; transition: width .2s linear, height .2s linear; }
        #mainNav .navbar-brand.logo span { font-size: 1.6rem; transition: font-size .2s linear, opacity .2s linear; }
        #mainNav.condensed .navbar-brand.logo img { width: 32px; height: 32px; }
        #mainNav.condensed .navbar-brand.logo span { font-size: 1.15rem; opacity: .95; }

        /* Menu rows wrapper keeps layout stable */
        #mainNav .nav-rows { display: flex; flex-direction: column; gap: .25rem; }
        #mainNav .menu-row { overflow: hidden; }
        #navContentHeight { height: var(--menu-height, auto); transition: height .1s linear; }

        /* Desktop interpolation with --c in [0..1] */
        @media (min-width: 992px) {
            #mainNav .brand-row {
                padding-top: calc(.6rem - .45rem * var(--c));
                padding-bottom: calc(.6rem - .45rem * var(--c));
            }
            #mainNav .navbar-brand.logo img {
                width: calc(52px - 20px * var(--c));
                height: calc(52px - 20px * var(--c));
            }
            #mainNav .navbar-brand.logo span {
                font-size: calc(1.6rem - .45rem * var(--c));
            }
            #mainNav .menu-row {
                max-height: calc(var(--menu-height, 999px) * (1 - var(--c)));
                opacity: calc(1 - var(--c));
                transition: max-height .1s linear, opacity .1s linear;
                will-change: max-height, opacity;
            }
            #navContentHeight {
                height: calc(var(--menu-height, 0px) * (1 - var(--c)));
                transition: height .1s linear;
            }
        }

        /* Ensure the desktop nav stays rendered; we'll animate its container instead */
        @media (min-width: 992px) {
            #navContent.navbar-collapse { display: flex !important; }
        }

        /* Mobile helpers */
        .navbar-light .navbar-toggler-icon {
            background-image: var(--bs-navbar-toggler-icon-bg, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0,0,0,0.7)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"));
        }
        #navContent .navbar-nav { width: 100%; align-items: center; justify-content: center; text-align: center; }
        #navContent .navbar-nav .nav-link { padding-left: .75rem; padding-right: .75rem; }
        #navContent.collapse { transition: none; }
    </style>


    <style>
        html { scroll-behavior: smooth; }
        .header, header { will-change: transform, height, opacity; transition: height 200ms ease, padding 200ms ease, transform 200ms ease, opacity 150ms ease; }
        .site-logo, .logo { transition: transform 200ms ease, opacity 150ms ease; transform-origin: left center; }
        .header.is-scrolled .site-logo, header.is-scrolled .site-logo,
        .header.is-scrolled .logo, header.is-scrolled .logo { transform: scale(0.82); }
        .no-flash { visibility: hidden; }
        .no-flash.ready { visibility: visible; }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="80" tabindex="0">

<!-- NAVIGATION -->
<nav id="mainNav" class="navbar navbar-expand-lg navbar-light sticky-top shadow-sm" data-condense="logo" data-range="200">
    <div class="container nav-rows">
        <div class="brand-row w-100">
            <a class="navbar-brand logo mx-auto" href="#home" data-scroll-top>
                <img src="/assets/logo_round.png" alt="Logo" width="52" height="52" class="rounded-circle">
                <span>Doula Sibylle</span>
            </a>
            <button class="navbar-toggler position-absolute end-0 me-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navContent" aria-controls="navContent" aria-expanded="false"
                    aria-label="Menü öffnen">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div id="navContentHeight" class="w-100">
            <div class="menu-row">
                <div class="collapse navbar-collapse w-100" id="navContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-3 gap-lg-3 justify-content-center align-items-center text-center w-100">
                        <li class="nav-item"><a class="nav-link" href="#home" data-scroll-top>Start</a></li>
                        <li class="nav-item"><a class="nav-link" href="#doula">Doula</a></li>
                        <li class="nav-item"><a class="nav-link" href="#angebot">Angebot</a></li>
                        <li class="nav-item"><a class="nav-link" href="#faq">Fragen</a></li>
                        <li class="nav-item"><a class="nav-link" href="#kontakt">Kontakt</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Start -->
<section id="home" class="section bg-white">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-12 col-lg-6">
                <h1 class="display-5 hero-title mb-3">Begleitung vor der Geburt, während der Geburt
                    und danach</h1>
                <p class="lead maxw-700">Einfühlsame Unterstützung für werdende Eltern. Präsenz,
                    Wissen und Ruhe für eine selbstbestimmte Geburtserfahrung.</p>
                <div class="d-flex flex-wrap gap-3 mt-3">
                    <a href="#angebot" class="btn btn-accent btn-lg rounded-pill px-4">Angebot
                        ansehen</a>
                    <a href="#kontakt" class="btn btn-outline-secondary btn-lg rounded-pill px-4">Termin
                        anfragen</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-center hero-round">
                <img class="img-fluid rounded-3" src="/assets/hero_round.png"
                     alt="Doula bei der Begleitung">
            </div>
        </div>
    </div>
</section>

<!-- DOULA -->
<section id="doula" class="section bg-soft">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-12 col-md-6 order-md-2 text-center">
                <img class="img-fluid rounded-3" src="/assets/doula.jpg" alt="Porträt der Doula">
            </div>
            <div class="col-12 col-md-6 order-md-1">
                <h2 class="h1 mb-3">Was eine Doula bietet</h2>
                <p>Kontinuierliche, nicht medizinische Betreuung. Fokus auf Wohlbefinden und
                    Bedürfnisse der Gebärenden sowie des Umfelds.</p>
                <ul class="mt-3">
                    <li>Vorbereitung auf Geburt und Wochenbett</li>
                    <li>Emotionale Stärkung und kontinuierliche Anwesenheit</li>
                    <li>Entspannungsimpulse und praktische Hilfen</li>
                    <li>Ressourcen für Partnerinnen und Partner</li>
                </ul>
                <a href="#kontakt" class="btn btn-accent rounded-pill mt-3">Kennenlernen
                    vereinbaren</a>
            </div>
        </div>
    </div>
</section>

<!-- ANGEBOT -->
<section id="angebot" class="section bg-white">
    <div class="container">
        <h2 class="h1 text-center mb-4">Angebot</h2>
        <p class="mx-auto text-center maxw-900 mb-5">Pakete für unterschiedliche Bedürfnisse. Jede
            Begleitung ist individuell und orientiert sich an der Situation der Familie.</p>
        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h3 class="h4" style="color:var(--accent)">Kennenlern-Paket</h3>
                        <p class="flex-grow-1">Unverbindliches Treffen. Besprechen von Wünschen und
                            Rahmen. Entscheidungshilfe für die weitere Zusammenarbeit.</p>
                        <a href="#kontakt" class="btn btn-outline-secondary rounded-pill mt-2">Anfragen</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h3 class="h4" style="color:var(--accent)">Geburtsbegleitung</h3>
                        <ul class="mb-3">
                            <li>Vorbereitungstreffen</li>
                            <li>Rufbereitschaft im vereinbarten Zeitraum</li>
                            <li>Kontinuierliche Präsenz während der Geburt</li>
                            <li>Nachgespräch im Wochenbett</li>
                        </ul>
                        <a href="#kontakt" class="btn btn-accent rounded-pill mt-auto">Details
                            klären</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h3 class="h4" style="color:var(--accent)">Wochenbett</h3>
                        <p class="flex-grow-1">Unterstützung nach der Geburt. Struktur, Ruhe und
                            Zeit für Ankommen. Alltagsentlastung nach Absprache.</p>
                        <a href="#kontakt" class="btn btn-outline-secondary rounded-pill mt-2">Mehr
                            erfahren</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="section bg-soft">
    <div class="container">
        <h2 class="h1 text-center mb-4">Häufige Fragen</h2>
        <div class="accordion mx-auto maxw-900" id="faqAcc">
            <div class="accordion-item">
                <h2 class="accordion-header" id="q1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#a1" aria-expanded="true" aria-controls="a1">
                        Arbeitet eine Doula mit Hebammen zusammen
                    </button>
                </h2>
                <div id="a1" class="accordion-collapse collapse show" data-bs-parent="#faqAcc">
                    <div class="accordion-body">Ja. Die Doula ergänzt die medizinische Kompetenz der
                        Hebamme mit emotionaler und praktischer Begleitung.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="q2">
                    <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#a2" aria-expanded="false"
                            aria-controls="a2">
                        Ist die Begleitung auch zu Hause möglich
                    </button>
                </h2>
                <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
                    <div class="accordion-body">Begleitung ist im Spital, im Geburtshaus und zu
                        Hause möglich. Details werden im Vorgespräch geklärt.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="q3">
                    <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#a3" aria-expanded="false"
                            aria-controls="a3">
                        Wie erfolgt die Terminvereinbarung
                    </button>
                </h2>
                <div id="a3" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
                    <div class="accordion-body">Schreiben Sie eine E-Mail oder nutzen Sie das
                        Formular. Sie erhalten zeitnah eine Rückmeldung.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- KONTAKT -->
<section id="kontakt" class="section bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 text-center">
                <h2 class="h1 mb-3">Kontakt</h2>
                <p class="lead mb-4 maxw-700 mx-auto">Ich freue mich auf Ihre Nachricht. Gerne
                    klären wir Fragen und besprechen Wünsche.</p>
            </div>
            <div class="col-12 col-lg-8">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Ihr Name">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">E-Mail</label>
                        <input type="email" class="form-control" id="email"
                               placeholder="name@example.com">
                    </div>
                    <div class="col-12">
                        <label for="message" class="form-label">Nachricht</label>
                        <textarea id="message" class="form-control" rows="5"
                                  placeholder="Ihre Nachricht"></textarea>
                    </div>
                    <div class="col-12 d-grid d-sm-flex gap-3">
                        <button type="submit" class="btn btn-accent px-4 rounded-pill">Senden
                        </button>
                        <a href="mailto:hallo@example.com"
                           class="btn btn-outline-secondary px-4 rounded-pill"><i
                                    class="bi bi-envelope me-2"></i>E-Mail schreiben</a>
                    </div>
                </form>
                <ul class="list-unstyled mt-4">
                    <li><i class="bi bi-geo-alt me-2"></i>Region: Zürich und Umgebung</li>
                    <li><i class="bi bi-telephone me-2"></i>+41 79 000 00 00</li>
                    <li><i class="bi bi-envelope me-2"></i><a href="mailto:hallo@example.com">hallo@example.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="py-4">
    <div class="container">
        <div class="row align-items-center gy-3">
            <div class="col-12 col-lg-4 text-center text-lg-start">
                <small>© <span id="y"></span> Doula. Alle Rechte vorbehalten.</small>
            </div>
            <div class="col-12 col-lg-4 text-center">
                <a href="#home" class="me-3" data-scroll-top>Start</a>
                <a href="#angebot" class="me-3">Angebot</a>
                <a href="#kontakt">Kontakt</a>
            </div>
            <div class="col-12 col-lg-4 text-center text-lg-end">
                <a class="me-3" href="https://instagram.com/" target="_blank" rel="noopener"
                   aria-label="Instagram">
                    <i class="bi bi-instagram" style="font-size:1.3rem" aria-hidden="true"></i>
                </a>
                <a href="mailto:hallo@example.com" aria-label="E-Mail">
                    <i class="bi bi-envelope" style="font-size:1.3rem" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center small">
                <a href="#" class="me-3">Impressum</a>
                <a href="#" class="me-3">Datenschutz</a>
                <a href="#">AGB</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    (function() {
        const mq = window.matchMedia('(min-width: 992px)');
        const nav = document.getElementById('mainNav');
        const menu = document.getElementById('navContent');
        const heightWrapper = document.getElementById('navContentHeight');
        const brandRow = nav?.querySelector('.brand-row');
        if (!nav || !menu || !heightWrapper || !brandRow) return;

        let lastC = 0;
        let animating = false;

        // Read tunable condense range from data-range (smaller = faster reduction)
        const rangeDefault = 200;
        const getRange = () => {
            const v = parseFloat(nav.getAttribute('data-range'));
            return Number.isFinite(v) && v > 0 ? v : rangeDefault;
        };

        // Measure menu height once and on resize; force --c=0 while measuring to avoid collapsed measurement
        const measure = () => {
            if (!mq.matches) {
                heightWrapper.style.removeProperty('--menu-height');
                setC(0);
                nav.classList.remove('condensed');
                return;
            }
            const prevC = getComputedStyle(nav).getPropertyValue('--c');
            nav.style.setProperty('--c', '0');
            const wasOpen = menu.classList.contains('show');
            menu.classList.add('show');
            const tmpHeight = menu.offsetHeight;
            heightWrapper.style.setProperty('--menu-height', tmpHeight + 'px');
            if (!wasOpen) menu.classList.remove('show');
            nav.style.setProperty('--c', prevC || '0');
        };

        const clamp01 = (n) => Math.max(0, Math.min(1, n));

        const setC = (c) => {
            nav.style.setProperty('--c', c.toString());
            if (c > 0.02) nav.classList.add('condensed'); else nav.classList.remove('condensed');
            lastC = c;
        };

        const onScroll = () => {
            if (!mq.matches || animating) return;
            const y = Math.max(0, window.scrollY || window.pageYOffset || 0);
            const c = clamp01(y / getRange());
            if (c !== lastC) setC(c);
        };

        // Smooth scroll helper with custom easing and callback
        const smoothScrollTo = (targetY, duration = 450, done) => {
            const startY = window.scrollY || window.pageYOffset || 0;
            const delta = targetY - startY;
            if (Math.abs(delta) < 1) { done && done(); return; }
            const startT = performance.now();
            animating = true;

            const easeOutCubic = (t) => 1 - Math.pow(1 - t, 3);

            const step = (now) => {
                const p = Math.min(1, (now - startT) / duration);
                const y = startY + delta * easeOutCubic(p);
                window.scrollTo(0, y);
                if (p < 1) requestAnimationFrame(step);
                else { animating = false; done && done(); }
            };
            requestAnimationFrame(step);
        };

        // Scroll to anchors with perfect alignment
        const scrollToAnchor = (id) => {
            const el = id ? document.getElementById(id) : null;
            if (!el) return;

            if (id === 'home') {
                // Go fully to top and expand
                smoothScrollTo(0, 450, () => setC(0));
                return;
            }

            // Condense for in-page navigation and align section top just below condensed navbar
            const prevC = getComputedStyle(nav).getPropertyValue('--c');
            setC(1);
            // Force a reflow so the new height is measurable
            const navH = nav.getBoundingClientRect().height;
            // Desired top position is section top minus condensed navbar height
            const targetTop = Math.max(0, el.getBoundingClientRect().top + window.pageYOffset - navH);
            smoothScrollTo(targetTop, 450, () => setC(1));
        };

        // Intercept clicks on internal anchors for precise alignment
        document.addEventListener('click', (e) => {
            const a = e.target.closest('a[href^="#"]');
            if (!a) return;

            const href = a.getAttribute('href');
            const targetId = href.replace('#', '');

            // Close mobile menu after selection
            if (menu.classList.contains('show')) {
                const bsCollapse = bootstrap.Collapse.getOrCreateInstance(menu, { toggle: false });
                bsCollapse.hide();
            }

            // Handle top scroll if marked as top link
            if (a.hasAttribute('data-scroll-top') || targetId === 'home' || href === '#') {
                e.preventDefault();
                scrollToAnchor('home');
                history.replaceState(null, '', '#home');
                return;
            }

            // Regular section anchors
            if (targetId) {
                const el = document.getElementById(targetId);
                if (el) {
                    e.preventDefault();
                    scrollToAnchor(targetId);
                    history.replaceState(null, '', '#' + targetId);
                }
            }
        }, true);

        // Handle hash on load/after refresh for perfect alignment
        const handleInitialHash = () => {
            const hash = (location.hash || '').replace('#', '');
            if (!hash) { setC(0); return; }
            // Delay to allow layout ready then align
            setTimeout(() => scrollToAnchor(hash === 'home' ? 'home' : hash), 0);
        };

        // Wire up listeners
        window.addEventListener('scroll', onScroll, { passive: true });
        window.addEventListener('resize', () => { measure(); onScroll(); }, { passive: true });
        document.addEventListener('DOMContentLoaded', () => { measure(); onScroll(); handleInitialHash(); });
        window.addEventListener('load', () => { measure(); onScroll(); });

        // Footer year
        document.getElementById('y').textContent = new Date().getFullYear();
    })();
</script>


<script>
    (function() {
        const doc = document;
        const header = doc.querySelector('.header') || doc.querySelector('header');
        const logo = doc.querySelector('.site-logo, .logo');
        const shrinkClass = 'is-scrolled';
        const readyClass = 'ready';
        const noFlashClass = 'no-flash';
        const threshold = 10; // pixels from top to treat as "at top"

        // Prevent initial flicker: hide until we set correct class, then reveal.
        if (header) {
            header.classList.add(noFlashClass);
            requestAnimationFrame(() => {
                if (window.scrollY > threshold) header.classList.add(shrinkClass);
                else header.classList.remove(shrinkClass);
                header.classList.add(readyClass);
            });
        }

        // rAF scroll handler to avoid jitter
        let ticking = false;
        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    if (header) {
                        if (window.scrollY > threshold) header.classList.add(shrinkClass);
                        else header.classList.remove(shrinkClass);
                    }
                    ticking = false;
                });
                ticking = true;
            }
        }, { passive: true });

        // Helper to get current header height (after shrink)
        function currentHeaderHeight() {
            if (!header) return 0;
            const rect = header.getBoundingClientRect();
            return rect.height;
        }

        // Smooth scroll with header offset. Force simultaneous shrink+scroll by setting class first.
        function scrollToTarget(el) {
            if (!el) return;
            // Ensure shrink applied immediately so both appear as one step
            if (header) header.classList.add(shrinkClass);
            const headerH = currentHeaderHeight();
            const targetY = Math.max(0, el.getBoundingClientRect().top + window.pageYOffset - headerH);
            window.scrollTo({ top: targetY, behavior: 'smooth' });
        }

        // Intercept same-page anchor links
        doc.addEventListener('click', function(e) {
            const a = e.target.closest('a[href^="#"]');
            if (!a) return;
            const href = a.getAttribute('href');
            if (!href || href === '#') return;
            const id = href.slice(1);
            const target = id ? doc.getElementById(id) : null;
            if (!target) return;
            e.preventDefault();
            scrollToTarget(target);
        });

        // Clicking the logo scrolls to top smoothly and expands logo without extra scrolls
        if (logo) {
            logo.addEventListener('click', function(e) {
                // If logo is inside a link to home, still handle smoothly
                e.preventDefault();
                // Remove shrink when arriving at top, but do it at the end of the smooth scroll
                const onScrollEnd = () => {
                    if (window.scrollY <= threshold && header) header.classList.remove(shrinkClass);
                    window.removeEventListener('scroll', onScrollEndPassive, { passive: true });
                };
                const onScrollEndPassive = () => {
                    if (window.scrollY <= threshold) onScrollEnd();
                };
                window.addEventListener('scroll', onScrollEndPassive, { passive: true });
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }

        // Reveal after initial class decision
        if (header) {
            requestAnimationFrame(() => {
                header.classList.remove(noFlashClass);
            });
        }
    })();
</script>
</body>
</html>
