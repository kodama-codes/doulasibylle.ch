<?php
$pageTitle = 'Doula Sibylle – Begleitung rund um deine Geburt';
$current = 'home';
?>
<!doctype html>
<html lang="de">
<?php include __DIR__ . '/partials/head.php'; ?>
<body>
<?php include __DIR__ . '/partials/header.php'; ?>

<main>


    <section class="hero-split" style="background: var(--secondary);">

        <div class="container-fluid px-0">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 offset-lg-2">
                    <div class="container">
                        <div class="py-5">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <img class="logo-big" src="/assets/logo.png"
                                     alt="Doula Sibylle Logo">
                                <h1 class="m-0" style="color: var(--accent);">Doula Sibylle</h1>
                            </div>
                            <p class="lead mb-0">
                                Einfühlsame Begleitung durch Schwangerschaft, Geburt und Wochenbett.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="hero-img-right">
                        <img src="/assets/pregnancy.png" class="hero-img"
                             alt="Schwangerschaft Illustration">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5 text-center" style="background: var(--primary); color:#fff;">
        <div class="container reveal">
            <h2 class="mb-4">Du bestimmst deinen Weg.<br>Ich halte den Raum.</h2>
            <img src="/assets/hero_round.png" alt="" style="max-width:220px;">
        </div>
    </section>

    <section class="py-5">
        <div class="container reveal">
            <h3 class="mb-4">Was macht eine Doula?</h3>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <h4>Emotionale Begleitung</h4>
                        <p>Kontinuierliche Präsenz vor, während und nach der Geburt.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <h4>Orientierung & Wissen</h4>
                        <p>Neutral, evidenzbasiert und verständlich erklärt.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <h4>Raum halten</h4>
                        <p>Für Gefühle, Fragen, Entscheidungen und deinen eigenen Weg.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 text-center" style="background: var(--secondary);">
        <div class="container reveal">
            <h3 class="mb-4">Wie möchtest du weitergehen?</h3>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="/about.php" class="btn ghost">Lerne mich kennen</a>
                <a href="/offers.php" class="btn">Angebote ansehen</a>
                <a href="/contact.php" class="btn ghost">Kontakt aufnehmen</a>
            </div>
        </div>
    </section>

</main>


<!--<main class="hero">-->
<!--    <div class="wide">-->
<!--        <span class="kicker">Zugewandt. Ruhig. An deiner Seite.</span>-->
<!--        <h2>Einfühlsame Doula-Begleitung rund um deine Geburt</h2>-->
<!--        <p class="lead">-->
<!--            Ich begleite dich und deine Familie vor, während und nach der Geburt. Mit-->
<!--            Ruhe, Erfahrung und Herz sorge ich für Orientierung und Sicherheit. So findest du deinen-->
<!--            ganz eigenen Weg durch Schwangerschaft, Geburt und Wochenbett.-->
<!--        </p>-->
<!--        <div class="cta">-->
<!--            <a class="btn" href="/offers.php">Angebote ansehen</a>-->
<!--            <a class="btn ghost" href="/contact.php">Kostenloses Kennenlernen</a>-->
<!--        </div>-->
<!--        <p class="muted" style="margin-top:18px">-->
<!--            Ich bin Trainee im-->
<!--            <a href="https://wombexpansion.com/" target="_blank" rel="noopener">-->
<!--                Womb Expansion Doula Course-->
<!--            </a>.-->
<!--        </p>-->
<!--    </div>-->
<!--    <div class="art">-->
<!--        <img src="assets/hero_round.png" alt="Illustration Mutter mit Baby"/>-->
<!--    </div>-->
<!--</main>-->

<?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
