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
    <link rel="stylesheet" href="/style.css">

</head>
<body data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="80" tabindex="0">

<!-- NAVIGATION -->
<nav id="mainNav" class="navbar navbar-expand-lg sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand logo"" href="#home">
        <img src="/assets/logo_round.png" alt="Logo" width="44" height="44" class="rounded-circle">
        <span>Doula Sibylle</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navContent" aria-controls="navContent" aria-expanded="false"
                aria-label="Menü öffnen">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="#home">Start</a></li>
                <li class="nav-item"><a class="nav-link" href="#doula">Doula</a></li>
                <li class="nav-item"><a class="nav-link" href="#angebot">Angebot</a></li>
                <li class="nav-item"><a class="nav-link" href="#faq">Fragen</a></li>
                <li class="nav-item"><a class="nav-link" href="#kontakt">Kontakt</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Start -->
<header id="home" class="section bg-hero">
    <div class="container">
        <div class="grid grid-hero">
            <div class="hero-content">
                <div class="eyebrow">Doula Begleitung</div>
                <h1 class="hero-title">Deine Doula Begleitung mit Herz und Klarheit</h1>
                <p class="hero-sub">
                    Ich begleite dich und euch vor der Geburt, während der Geburt und im Wochenbett.
                    Ihr trefft informierte Entscheidungen und bleibt als Team gestärkt. Vertrauen, Präsenz, Ruhe.
                </p>

                <ul class="hero-benefits">
                    <li>Kontinuierliche Begleitung</li>
                    <li>Selbstbestimmung stärken</li>
                    <li>Vorbereitung für euch als Team</li>
                </ul>

                <div class="hero-ctas">
                    <a href="#kontakt" class="btn btn-accent btn-lg">Unverbindlich kennenlernen</a>
                    <a href="#doula" class="btn btn-outline btn-lg">Was macht eine Doula</a>
                </div>

                <div class="hero-badges">
                    <span class="chip">Empathisch</span>
                    <span class="chip">Ruhig</span>
                    <span class="chip">Verlässlich</span>
                </div>

                <p class="note-in-ausbildung">
                    Aktuell in Ausbildung. Ich suche eine Begleitung inklusive Geburt. Melde dich gern.
                </p>
            </div>

            <div class="hero-visual">
                <div class="photo-frame">
                    <img src="assets/portrait.jpg" alt="Porträt von mir als Doula" class="hero-round" />
                    <span class="decor-ring"></span>
                    <span class="decor-blob"></span>
                </div>
            </div>
        </div>
    </div>
</header>


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
    document.getElementById('y').textContent = new Date().getFullYear();
</script>
</body>
</html>
