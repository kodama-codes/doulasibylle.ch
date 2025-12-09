<?php
$pageTitle = 'Über mich – Doula Sibylle';
$current = 'about';
?>
<!doctype html>
<html lang="de">
<?php include __DIR__ . '/partials/head.php'; ?>
<body>
<?php include __DIR__ . '/partials/header.php'; ?>

<main>
    <section>
        <div class="wide about reveal">
            <img src="portrait.jpg" alt="Sibylle – Doula" onerror="this.style.display='none'">
            <div>
                <span class="kicker">Über mich</span>
                <h3>Hallo, ich bin Sibylle</h3>
                <p>
                    Als Doula halte ich einen geschützten Raum für dich. Ich höre zu, informiere,
                    stärke
                    und bleibe an deiner Seite. Meine Arbeit ist unabhängig von Klinik, Hebamme oder
                    Ort
                    der Geburt und richtet sich ganz nach deinen Bedürfnissen.
                </p>
                <p>
                    Wichtig für mich sind Respekt, Klarheit und liebevolle Begleitung. Ich arbeite
                    evidenzbasiert, traue deiner Intuition und fördere selbstbestimmte
                    Entscheidungen.
                </p>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>
