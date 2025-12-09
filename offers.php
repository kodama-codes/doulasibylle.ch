<?php
$pageTitle = 'Angebote und Preise – Doula Sibylle';
$current = 'offers';
?>
<!doctype html>
<html lang="de">
<?php include __DIR__ . '/partials/head.php'; ?>
<body>
<?php include __DIR__ . '/partials/header.php'; ?>

<main>
    <section>
        <div class="wide reveal">
            <span class="kicker">Angebote & Preise</span>
            <h3>Pakete für dich</h3>
            <div class="pricing">
                <article class="card price">
                    <h4>Geburtsvorbereitung 1:1</h4>
                    <p class="tag">CHF 280</p>
                    <p>
                        Zwei Treffen je 90 Minuten. Themen nach Bedarf, inkl. Unterlagen und
                        Nachbereitung.
                    </p>
                    <a class="btn" href="/contact.php">Anfragen</a>
                </article>
                <article class="card price">
                    <h4>Geburtsbegleitung</h4>
                    <p class="tag">CHF 1400</p>
                    <p>
                        Zwei Vorbereitungstermine, Rufbereitschaft 24/7 ab SSW 38, kontinuierliche
                        Begleitung unter der Geburt, ein Wochenbettbesuch.
                    </p>
                    <a class="btn" href="/contact.php">Anfragen</a>
                </article>
                <article class="card price">
                    <h4>Wochenbettpaket</h4>
                    <p class="tag">CHF 380</p>
                    <p>
                        Drei Besuche à 90 Minuten im Wochenbett. Raum für Ankommen, Fragen, Erholung
                        und
                        Integration.
                    </p>
                    <a class="btn" href="/contact.php">Anfragen</a>
                </article>
            </div>
            <p class="muted" style="margin-top:10px">
                Preise verstehen sich als Richtwerte. Ratenzahlung
                und soziale Tarife sind möglich.
            </p>
        </div>
    </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
