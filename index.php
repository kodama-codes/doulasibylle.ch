<?php
// --- Simple contact form handler ---
// Replace with your receiving email address
$recipient = 'hello@doulasibylle.ch';
$feedback = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Basic spam honeypot
    if (!empty($_POST['website'])) {
        // silently ignore bots
    } else {
        $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
        $phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS));

        if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && $message) {
            $subject = 'Neue Anfrage über doulasibylle.ch';
            $body = "Name: $name\nEmail: $email\nTelefon: $phone\n\nNachricht:\n$message";
            $headers = 'From: doulasibylle.ch <no-reply@doulasibylle.ch>' . "\r\n" . 'Reply-To: ' . $email;
            if (@mail($recipient, $subject, $body, $headers)) {
                $feedback = 'Vielen Dank. Deine Nachricht wurde gesendet.';
            } else {
                $feedback = 'Danke für deine Nachricht. Leider konnte sie nicht automatisch versendet werden. Schreib mir bitte direkt an: ' . htmlspecialchars($recipient);
            }
        } else {
            $feedback = 'Bitte fülle die markierten Felder korrekt aus.';
        }
    }
}
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doula Sibylle – Begleitung rund um Geburt</title>
    <meta name="description"
          content="Einfühlsame Doula-Begleitung vor, während und nach der Geburt. Warm, zugewandt und professionell für dich und deine Familie.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <style>
        :root {
            --primary: #D8A7A7;
            --secondary: #F7F1F1;
            --accent: #A56C6C;
            --text: #3D3D3D;
            --max: 1100px;
            --radius: 16px;
        }

        * {
            box-sizing: border-box
        }

        html {
            scroll-behavior: smooth
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            color: var(--text);
            background: #fff;
            line-height: 1.6
        }

        /* Sticky brand bar (always visible) */
        .brandbar {
            position: sticky;
            top: 0;
            z-index: 60;
            backdrop-filter: saturate(120%) blur(6px);
            background: rgba(255, 255, 255, .9);
            border-bottom: 1px solid rgba(0, 0, 0, .06);
        }

        .container {
            max-width: var(--max);
            margin: 0 auto;
            padding: 0 20px
        }

        .brandrow {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 12px 0;
            position: relative
        }

        .brandrow img {
            width: 54px;
            height: 54px;
            border-radius: 50%;
            object-fit: cover
        }

        .brandrow h1 {
            font-size: 1.3rem;
            margin: 0;
            color: var(--accent);
            letter-spacing: .5px
        }

        /* Burger button (mobile only) */
        .burger {
            position: absolute;
            right: 6px;
            top: 50%;
            transform: translateY(-50%);
            width: 42px;
            height: 42px;
            border-radius: 10px;
            border: 1px solid rgba(0, 0, 0, .12);
            display: none;
            align-items: center;
            justify-content: center;
            background: #fff;
            cursor: pointer;
        }

        .burger span, .burger::before, .burger::after {
            content: "";
            display: block;
            width: 20px;
            height: 2px;
            background: var(--accent);
            transition: transform .25s ease, opacity .25s ease;
        }

        .burger::before {
            margin-top: -6px
        }

        .burger::after {
            margin-top: 6px
        }

        .burger[aria-expanded="true"] span {
            opacity: 0
        }

        .burger[aria-expanded="true"]::before {
            transform: translateY(6px) rotate(45deg)
        }

        .burger[aria-expanded="true"]::after {
            transform: translateY(-6px) rotate(-45deg)
        }

        /* Navigation row (scrolls away with page) */
        nav {
            border-bottom: 1px solid rgba(0, 0, 0, .06);
            background: #fff;
        }

        nav ul {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            padding: 10px 0;
            margin: 0
        }

        nav a {
            display: block;
            padding: 8px 14px;
            border-radius: 999px;
            text-decoration: none;
            color: var(--text);
            font-weight: 500
        }

        nav a:hover, nav a:focus {
            background: var(--secondary)
        }

        /* Hero */
        .hero {
            display: grid;
            grid-template-columns:1.1fr .9fr;
            gap: 30px;
            align-items: center;
            padding: 80px 20px;
            background: var(--secondary)
        }

        .hero h2 {
            font-size: 2.2rem;
            margin: .2rem 0 1rem;
            color: var(--accent)
        }

        .hero p {
            font-size: 1.05rem
        }

        .cta {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 18px
        }

        .btn {
            padding: 12px 18px;
            border-radius: 999px;
            border: 2px solid var(--accent);
            background: var(--accent);
            color: #fff;
            text-decoration: none;
            font-weight: 600
        }

        .btn.ghost {
            background: transparent;
            color: var(--accent)
        }

        .hero .art {
            display: flex;
            justify-content: center
        }

        .hero .art img {
            max-width: 360px;
            width: 100%;
            filter: drop-shadow(0 10px 22px rgba(0, 0, 0, .08));
        }

        /* Sections */
        section {
            padding: 80px 0
        }

        section .lead {
            max-width: 780px
        }

        h3 {
            font-size: 1.8rem;
            margin: 0 0 10px;
            color: var(--accent)
        }

        .kicker {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 999px;
            background: var(--primary);
            color: #fff;
            font-weight: 600;
            font-size: .85rem;
            margin-bottom: 12px
        }

        /* About */
        .about {
            display: grid;
            grid-template-columns:1fr 1fr;
            gap: 36px;
            align-items: center
        }

        .about img {
            width: 100%;
            border-radius: var(--radius);
            box-shadow: 0 10px 24px rgba(0, 0, 0, .08);
        }

        /* What a doula does */
        .grid {
            display: grid;
            grid-template-columns:repeat(3, 1fr);
            gap: 18px;
            margin-top: 24px
        }

        .card {
            background: #fff;
            border: 1px solid rgba(0, 0, 0, .06);
            border-radius: var(--radius);
            padding: 22px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, .05)
        }

        .card h4 {
            margin: 0 0 8px;
            font-size: 1.1rem;
            color: var(--accent)
        }

        /* Offers */
        .pricing {
            display: grid;
            grid-template-columns:repeat(3, 1fr);
            gap: 18px;
            margin-top: 24px
        }

        .price {
            border: 2px solid var(--primary);
        }

        .price .tag {
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--accent)
        }

        /* Contact */
        form {
            display: grid;
            gap: 12px;
            max-width: 680px
        }

        input, textarea {
            width: 100%;
            padding: 12px 14px;
            border-radius: 12px;
            border: 1px solid rgba(0, 0, 0, .15);
            font-family: inherit;
            font-size: 1rem
        }

        textarea {
            min-height: 140px;
            resize: vertical
        }

        label {
            font-weight: 600
        }

        .feedback {
            margin: 12px 0 0;
            color: var(--accent);
            font-weight: 600
        }

        /* Footer */
        footer {
            padding: 40px 0;
            background: var(--secondary);
            border-top: 1px solid rgba(0, 0, 0, .06);
        }

        .social a {
            display: inline-block;
            padding: 8px 10px;
            text-decoration: none;
            color: var(--accent);
            font-weight: 600
        }

        /* Utilities */
        .center {
            text-align: center
        }

        .two {
            display: grid;
            grid-template-columns:1fr 1fr;
            gap: 18px
        }

        .wide {
            max-width: var(--max);
            margin: 0 auto;
            padding: 0 20px
        }

        .muted {
            opacity: .9
        }

        /* Reveal animations */
        .reveal {
            opacity: 0;
            transform: translateY(12px);
            transition: opacity .6s ease, transform .6s ease
        }

        .reveal.in {
            opacity: 1;
            transform: none
        }

        /* Back-to-top button */
        .toTop {
            position: fixed;
            right: 18px;
            bottom: 18px;
            z-index: 70;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: 2px solid var(--accent);
            background: #fff;
            display: grid;
            place-items: center;
            text-decoration: none;
            color: var(--accent);
            font-size: 24px;
            box-shadow: 0 8px 18px rgba(0, 0, 0, .12);
            opacity: 0;
            pointer-events: none;
            transform: translateY(10px);
            transition: opacity .25s ease, transform .25s ease;
        }

        .toTop.show {
            opacity: 1;
            pointer-events: auto;
            transform: none
        }

        /* Responsive */
        @media (max-width: 900px) {
            .hero {
                grid-template-columns:1fr;
                gap: 20px;
                text-align: center
            }

            .about {
                grid-template-columns:1fr
            }

            .grid {
                grid-template-columns:1fr 1fr
            }

            .pricing {
                grid-template-columns:1fr
            }

            .two {
                grid-template-columns:1fr
            }

            .hero .art img {
                max-width: 280px
            }

            .burger {
                display: flex
            }

            /* Mobile menu closed by default */
            nav {
                position: sticky;
                top: 70px;
                z-index: 50
            }

            /* so it sits under the brandbar when open at top */
            nav ul {
                display: none;
                flex-direction: column;
                gap: 0;
                padding: 0
            }

            nav.open ul {
                display: flex
            }

            nav a {
                padding: 14px 18px;
                border-radius: 0;
                border-bottom: 1px solid rgba(0, 0, 0, .06)
            }

            nav a:active {
                background: var(--secondary)
            }
        }

        @media (max-width: 560px) {
            .grid {
                grid-template-columns:1fr
            }
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto
            }

            .reveal {
                transition: none
            }
        }
    </style>
</head>
<body>
<!-- Sticky brand row -->
<div class="brandbar" aria-label="Kopfbereich">
    <div class="container brandrow">
        <img src="/assets/logo_round.png" alt="Logo Doula Sibylle" width="128" height="128"/>
        <h1>doula sibylle</h1>
        <button class="burger" id="burger" aria-label="Menü" aria-expanded="false">
            <span></span>
        </button>
    </div>
</div>

<!-- Navigation row that scrolls away with the content -->
<nav id="mainnav" role="navigation" aria-label="Hauptnavigation">
    <div class="container">
        <ul>
            <li><a href="#home">Start</a></li>
            <li><a href="#about">Über mich</a></li>
            <li><a href="#doula">Doula</a></li>
            <li><a href="#offers">Angebote</a></li>
            <li><a href="#contact">Kontakt</a></li>
        </ul>
    </div>
</nav>

<main id="home" class="hero">
    <div class="wide">
        <span class="kicker">Zugewandt. Ruhig. An deiner Seite.</span>
        <h2>Einfühlsame Doula-Begleitung rund um deine Geburt</h2>
        <p class="lead">Ich begleite dich und deine Familie vor, während und nach der Geburt. Mit
            Ruhe, Erfahrung und Herz sorge ich für Orientierung und Sicherheit. So findest du deinen
            ganz eigenen Weg durch Schwangerschaft, Geburt und Wochenbett.</p>
        <div class="cta">
            <a class="btn" href="#offers">Angebote ansehen</a>
            <a class="btn ghost" href="#contact">Kostenloses Kennenlernen</a>
        </div>
        <p class="muted" style="margin-top:18px">Ich bin Trainee im <a
                    href="https://wombexpansion.com/" target="_blank" rel="noopener">Womb Expansion
                Doula Course</a>.</p>
    </div>
    <div class="art">
        <img src="/assets/hero_round.png" alt="Illustration Mutter mit Baby"/>
    </div>
</main>

<section id="about">
    <div class="wide about reveal">
        <img src="portrait.jpg" alt="Sibylle – Doula" onerror="this.style.display='none'">
        <div>
            <span class="kicker">Über mich</span>
            <h3>Hallo, ich bin Sibylle</h3>
            <p>Als Doula halte ich einen geschützten Raum für dich. Ich höre zu, informiere, stärke
                und bleibe an deiner Seite. Meine Arbeit ist unabhängig von Klinik, Hebamme oder Ort
                der Geburt und richtet sich ganz nach deinen Bedürfnissen.</p>
            <p>Wichtig für mich sind Respekt, Klarheit und liebevolle Begleitung. Ich arbeite
                evidenzbasiert, traue deiner Intuition und fördere selbstbestimmte
                Entscheidungen.</p>
        </div>
    </div>
</section>

<section id="doula" style="background:var(--secondary)">
    <div class="wide reveal">
        <span class="kicker">Was macht eine Doula</span>
        <h3>Worum es geht</h3>
        <p class="lead">Eine Doula bietet kontinuierliche, nicht medizinische Unterstützung. Das
            entlastet dich und deine Bezugsperson. Studien zeigen positive Effekte auf Zufriedenheit
            und Geburtserleben.</p>
        <div class="grid">
            <div class="card">
                <h4>Vor der Geburt</h4>
                <p>Besprechung deiner Wünsche, Geburtsplan, Mental Load reduzieren, Aufklärung über
                    Optionen, Ressourcen stärken.</p>
            </div>
            <div class="card">
                <h4>Während der Geburt</h4>
                <p>Kontinuierliche Präsenz, Atmung, Positionen, Entspannung, Worte finden, für Ruhe
                    sorgen und deinen Weg schützen.</p>
            </div>
            <div class="card">
                <h4>Im Wochenbett</h4>
                <p>Emotionaler Halt, Processing der Geburt, Unterstützung beim Ankommen, praktische
                    Hilfe und Netzwerke.</p>
            </div>
        </div>
    </div>
</section>

<section id="offers">
    <div class="wide reveal">
        <span class="kicker">Angebote & Preise</span>
        <h3>Pakete für dich</h3>
        <div class="pricing">
            <article class="card price">
                <h4>Geburtsvorbereitung 1:1</h4>
                <p class="tag">CHF 280</p>
                <p>Zwei Treffen je 90 Minuten. Themen nach Bedarf, inkl. Unterlagen und
                    Nachbereitung.</p>
                <a class="btn" href="#contact">Anfragen</a>
            </article>
            <article class="card price">
                <h4>Geburtsbegleitung</h4>
                <p class="tag">CHF 1400</p>
                <p>Zwei Vorbereitungstermine, Rufbereitschaft 24/7 ab SSW 38, kontinuierliche
                    Begleitung unter der Geburt, ein Wochenbettbesuch.</p>
                <a class="btn" href="#contact">Anfragen</a>
            </article>
            <article class="card price">
                <h4>Wochenbettpaket</h4>
                <p class="tag">CHF 380</p>
                <p>Drei Besuche à 90 Minuten im Wochenbett. Raum für Ankommen, Fragen, Erholung und
                    Integration.</p>
                <a class="btn" href="#contact">Anfragen</a>
            </article>
        </div>
        <p class="muted" style="margin-top:10px">Preise verstehen sich als Richtwerte. Ratenzahlung
            und soziale Tarife sind möglich.</p>
    </div>
</section>

<section id="contact" style="background:var(--secondary)">
    <div class="wide reveal">
        <span class="kicker">Kontakt</span>
        <h3>Lass uns sprechen</h3>
        <p class="lead">Schreib mir für ein kostenloses Kennenlerngespräch. Ich freue mich auf
            dich.</p>

        <?php if (!empty($feedback)): ?>
            <p class="feedback" role="status"><?= htmlspecialchars($feedback) ?></p>
        <?php endif; ?>

        <form method="post" action="#contact" novalidate>
            <div class="two">
                <div>
                    <label for="name">Name *</label>
                    <input id="name" name="name" required>
                </div>
                <div>
                    <label for="email">E-Mail *</label>
                    <input id="email" name="email" type="email" required>
                </div>
            </div>
            <div class="two">
                <div>
                    <label for="phone">Telefon</label>
                    <input id="phone" name="phone" type="tel">
                </div>
                <div style="display:none">
                    <label for="website">Website</label>
                    <input id="website" name="website" autocomplete="off">
                </div>
            </div>
            <div>
                <label for="message">Nachricht *</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button class="btn" type="submit">Nachricht senden</button>
        </form>

        <div class="social" style="margin-top:22px">
            <a href="https://instagram.com/" target="_blank" rel="noopener" aria-label="Instagram">Instagram</a>
            <a href="mailto:<?= htmlspecialchars($recipient) ?>" aria-label="Email">E-Mail</a>
        </div>
    </div>
</section>

<footer>
    <div class="wide center">
        <p style="margin:0">© <span id="year"></span> Doula Sibylle</p>
        <p class="muted" style="margin:.2rem 0 0">Trainee im <a href="https://wombexpansion.com/"
                                                                target="_blank" rel="noopener">Womb
                Expansion Doula Course</a></p>
    </div>
</footer>

<!-- Back-to-top button -->
<a href="#top" id="toTop" class="toTop" aria-label="Nach oben">
    ↑
</a>

<script>
    // Intersection Observer for reveal animations
    const obs = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('in');
                obs.unobserve(e.target);
            }
        })
    }, {threshold: 0.12});
    document.querySelectorAll('.reveal').forEach(el => obs.observe(el));

    // Current year
    document.getElementById('year').textContent = new Date().getFullYear();

    // Smooth scroll
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

    // Mobile burger menu toggle
    const burger = document.getElementById('burger');
    const nav = document.getElementById('mainnav');
    const toggleMenu = (open) => {
        const expanded = open ?? (burger.getAttribute('aria-expanded') !== 'true');
        burger.setAttribute('aria-expanded', expanded);
        nav.classList.toggle('open', expanded);
        if (expanded) {
            // focus first link for accessibility
            const first = nav.querySelector('a');
            if (first) first.focus({preventScroll: true});
        } else {
            burger.focus({preventScroll: true});
        }
    };
    burger.addEventListener('click', () => toggleMenu());

    // Close menu when clicking a link (mobile)
    nav.addEventListener('click', (e) => {
        if (e.target.tagName === 'A' && window.matchMedia('(max-width: 900px)').matches) {
            toggleMenu(false);
        }
    });

    // Show back-to-top button when nav is out of view
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

    // Ensure top anchor exists for smooth jump
    const topAnchor = document.createElement('div');
    topAnchor.id = 'top';
    document.body.prepend(topAnchor);
</script>

<!-- Structured data -->
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
</body>
</html>
