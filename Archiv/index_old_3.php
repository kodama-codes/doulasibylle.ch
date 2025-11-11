<?php /* Bootstrap One‑Pager Rewrite (angepasst) */ ?>
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
            scroll-behavior: smooth;
            font-family: 'Poppins', sans-serif;
            color: var(--text);
        }

        /* NAVBAR */
        .navbar {
            background-color: var(--secondary)
        }

        .navbar .nav-link {
            font-weight: 500
        }

        .navbar .nav-link.active, .navbar .nav-link:hover {
            color: var(--accent)
        }

        .navbar-brand.logo {
            display: inline-flex;
            align-items: center;
            gap: .6rem;
            font-size: 1.6rem;
            font-weight: 600;
            color: var(--accent);
            text-decoration: none
        }

        .navbar-brand.logo img {
            border-radius: 50%
        }

        /* HEADINGS */
        section h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: var(--accent);
            font-weight: 600
        }

        /* SECTIONS volle Breite */
        section.section, header.section {
            width: 100%;
            padding: 5rem 0
        }

        /* HERO */
        .hero-title {
            color: var(--accent)
        }

        .hero-round {
            width: 300px;
            height: auto;
            filter: drop-shadow(0 0 5px rgba(0, 0, 0, 0.3));
        }

        .btn-accent {
            background: var(--accent);
            color: #fff;
            border: 0
        }

        .btn-accent:hover {
            background: var(--primary);
            color: #fff
        }

        /* Hintergründe */
        .bg-soft {
            background-color: var(--secondary)
        }

        .bg-white {
            background-color: #fff
        }

        /* Container immer zentriert */
        .section > .container, header > .container {
            max-width: 1140px;
        }

        /* Footer */
        footer {
            background: var(--accent);
            color: #fff
        }

        footer a {
            color: #fff;
            text-decoration: none
        }

        footer a:hover {
            text-decoration: underline
        }

        .maxw-700 {
            max-width: 700px
        }

        .maxw-900 {
            max-width: 900px
        }

        /* Centered stacked navbar layout tweaks */
        #mainNav .navbar-brand.logo span { white-space: nowrap }
        @media (min-width: 992px) {
            #mainNav .navbar-collapse { display: block !important }
        }

        /* Condensed navbar behavior */
        #mainNav.condensed { transition: all .25s ease-in-out }
        #mainNav .container.flex-column { transition: padding .25s ease-in-out }
        #mainNav.condensed .container.flex-column { padding-top: .25rem; padding-bottom: .25rem }
        #mainNav.condensed .navbar-brand.logo img { width: 36px; height: 36px }
        #mainNav.condensed .navbar-brand.logo span { opacity: .95 }

        @media (min-width: 992px) {
            /* Interpolation handled by CSS variable --c now */
        }
        /* Mode: keep only menu on scroll */
        #mainNav[data-condense="menu"].condensed .navbar-brand.logo { display: none !important }
        }

        /* Ensure toggler icon is visible on light background */
        .navbar-light .navbar-toggler-icon {
            background-image: var(--bs-navbar-toggler-icon-bg, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0,0,0,0.7)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"));
        }


        /* Center the nav items in the collapse and on desktop */
        #navContent .navbar-nav { width: 100%; align-items: center; justify-content: center; text-align: center }
        #navContent .navbar-nav .nav-link { padding-left: .75rem; padding-right: .75rem }

        /* Smoothly collapse menu to avoid flicker and layout jump */
        #navContent.collapse { transition: none }
        #navContentHeight { height: var(--menu-height, auto) }
        #mainNav .nav-rows { display: flex; flex-direction: column; gap: .25rem }
        #mainNav .brand-row { display: flex; align-items: center; justify-content: center; position: relative; padding-top: .25rem; padding-bottom: .25rem }
        #mainNav .menu-row { overflow: hidden; transition: max-height .25s ease-in-out, opacity .2s ease-in-out }
        @media (min-width: 992px) {
            #mainNav:not(.condensed) .menu-row { max-height: var(--menu-height, 999px); opacity: 1 }
            #mainNav.condensed .menu-row { max-height: 0; opacity: 0; pointer-events: none }
        }

        /* keep background consistent to original */
        .navbar { background-color: var(--secondary) }


        /* Reduce overall navbar height when condensed */
        #mainNav { transition: padding .25s ease-in-out, background-color .2s ease-in-out }
        #mainNav .brand-row { transition: padding .25s ease-in-out }
        #mainNav:not(.condensed) .brand-row { padding-top: .6rem; padding-bottom: .6rem }
        #mainNav.condensed .brand-row { padding-top: .15rem; padding-bottom: .15rem }

        /* Shrink logo a bit more when condensed */
        #mainNav.condensed .navbar-brand.logo img { width: 32px; height: 32px }
        #mainNav.condensed .navbar-brand.logo span { font-size: 1.15rem }

        /* Reserve menu height only when expanded; collapse to zero when condensed */
        @media (min-width: 992px) {
            #mainNav:not(.condensed) #navContentHeight { height: var(--menu-height, auto) }
            #mainNav.condensed #navContentHeight { height: 0 }
            #navContentHeight { transition: height .25s ease-in-out }
        }


        /* Fluid condense interpolation on desktop using --c in [0..1] */
        #mainNav { --c: 0 } /* 0 expanded, 1 fully condensed */
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
            /* Menu height and opacity reduce smoothly as you scroll */
            #mainNav .menu-row {
                max-height: calc(var(--menu-height, 999px) * (1 - var(--c)));
                opacity: calc(1 - var(--c));
                transition: max-height .1s linear, opacity .1s linear;
                will-change: max-height, opacity;
            }
            #navContentHeight { height: calc(var(--menu-height, 0px) * (1 - var(--c))); transition: height .1s linear }
        }


        /* Ensure the desktop nav stays rendered; we'll animate its container instead */
        @media (min-width: 992px) {
            #navContent.navbar-collapse { display: flex !important }
            #mainNav .menu-row { overflow: hidden }
            /* Smooth opacity/height based on --c */
            #mainNav .menu-row {
                max-height: calc(var(--menu-height, 999px) * (1 - var(--c)));
                opacity: calc(1 - var(--c));
                transition: max-height .05s linear, opacity .05s linear;
            }
            #navContentHeight { height: calc(var(--menu-height, 0px) * (1 - var(--c))); transition: height .05s linear }
        }

    </style>

</head>
<body data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="80" tabindex="0">

<!-- NAVIGATION -->
<nav id="mainNav" class="navbar navbar-expand-lg navbar-light sticky-top shadow-sm" data-condense="logo">
    <div class="container nav-rows">
        <div class="brand-row w-100">
            <a class="navbar-brand logo mx-auto" href="#home">
                <img src="/assets/logo_round.png" alt="Logo" width="52" height="52" class="rounded-circle">
                <span>Doula Sibylle</span>
            </a>
            <button class="navbar-toggler position-absolute end-0 me-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navContent" aria-controls="navContent" aria-expanded="false"
                    aria-label="Menü öffnen">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div id="navContentHeight" class="w-100"><div class="menu-row"><div class="collapse navbar-collapse w-100" id="navContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-3 gap-lg-3 justify-content-center align-items-center text-center w-100">
                        <li class="nav-item"><a class="nav-link" href="#home">Start</a></li>
                        <li class="nav-item"><a class="nav-link" href="#doula">Doula</a></li>
                        <li class="nav-item"><a class="nav-link" href="#angebot">Angebot</a></li>
                        <li class="nav-item"><a class="nav-link" href="#faq">Fragen</a></li>
                        <li class="nav-item"><a class="nav-link" href="#kontakt">Kontakt</a></li>
                    </ul>
                </div></div></div>
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
                        <h3 class="h4" style="color:var(--accent)">Kennenlern‑Paket</h3>
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
                    <div class="accordion-body">Schreiben Sie eine E‑Mail oder nutzen Sie das
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
                        <label for="email" class="form-label">E‑Mail</label>
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
                                    class="bi bi-envelope me-2"></i>E‑Mail schreiben</a>
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
                <a href="#home" class="me-3">Start</a>
                <a href="#angebot" class="me-3">Angebot</a>
                <a href="#kontakt">Kontakt</a>
            </div>
            <div class="col-12 col-lg-4 text-center text-lg-end">
                <a class="me-3" href="https://instagram.com/" target="_blank" rel="noopener"
                   aria-label="Instagram">
                    <i class="bi bi-instagram" style="font-size:1.3rem" aria-hidden="true"></i>
                </a>
                <a href="mailto:hallo@example.com" aria-label="E‑Mail">
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
        if (!nav || !menu || !heightWrapper) return;

        // Measure menu height once and on resize
        const measure = () => {
            if (!mq.matches) {
                // Mobile does not reserve space
                heightWrapper.style.removeProperty('--menu-height');
                nav.style.setProperty('--c', 0);
                return;
            }
            const wasOpen = menu.classList.contains('show');
            menu.classList.add('show');
            const h = menu.offsetHeight;
            heightWrapper.style.setProperty('--menu-height', h + 'px');
            if (!wasOpen) menu.classList.remove('show');
        };

        // Fluid scroll mapping: start condensing immediately up to 140px
        const range = 200;
        const onScroll = () => {
            if (!mq.matches) return;
            const y = Math.max(0, window.scrollY);
            const c = Math.max(0, Math.min(1, y / range));
            nav.style.setProperty('--c', c.toString());
        };

        window.addEventListener('scroll', onScroll, { passive: true });
        window.addEventListener('resize', () => { measure(); onScroll(); }, { passive: true });
        document.addEventListener('DOMContentLoaded', () => { measure(); onScroll(); }); window.addEventListener('load', () => { measure(); onScroll(); });

        // Mobile: close burger menu after clicking a link
        document.addEventListener('click', (e) => {
            const a = e.target.closest('#navContent .nav-link');
            if (!a) return;
            // Only auto close when the menu is actually shown
            if (menu.classList.contains('show')) {
                const bsCollapse = bootstrap.Collapse.getOrCreateInstance(menu, { toggle: false });
                bsCollapse.hide();
            }
        }, true);
    })();
</script>

</body>
</html>
