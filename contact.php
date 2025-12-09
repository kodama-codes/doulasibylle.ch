<?php
$recipient = 'hello@doulasibylle.ch';
$feedback = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['website'])) {
        // Honeypot, keine Aktion
    } else {
        $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
        $phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS));

        if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && $message) {
            $subject = 'Neue Anfrage über doulasibylle.ch';
            $body = "Name: $name\nEmail: $email\nTelefon: $phone\n\nNachricht:\n$message";
            $headers = 'From: doulasibylle.ch <no-reply@doulasibylle.ch>' . "\r\n" .
                'Reply-To: ' . $email;

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

$pageTitle = 'Kontakt – Doula Sibylle';
$current = 'contact';
?>
<!doctype html>
<html lang="de">
<?php include __DIR__ . '/partials/head.php'; ?>
<body>
<?php include __DIR__ . '/partials/header.php'; ?>

<main>
    <section style="background:var(--secondary)">
        <div class="wide reveal">
            <span class="kicker">Kontakt</span>
            <h3>Lass uns sprechen</h3>
            <p class="lead">
                Schreib mir für ein kostenloses Kennenlerngespräch. Ich freue mich auf
                dich.
            </p>

            <?php if (!empty($feedback)): ?>
                <p class="feedback" role="status"><?= htmlspecialchars($feedback) ?></p>
            <?php endif; ?>

            <form method="post" action="/contact.php#contact" novalidate id="contact">
                <div class="two">
                    <div>
                        <label for="name">Name *</label>
                        <input id="name" name="name" required
                               value="<?= isset($name) ? htmlspecialchars($name) : '' ?>">
                    </div>
                    <div>
                        <label for="email">E-Mail *</label>
                        <input id="email" name="email" type="email" required
                               value="<?= isset($email) ? htmlspecialchars($email) : '' ?>">
                    </div>
                </div>
                <div class="two">
                    <div>
                        <label for="phone">Telefon</label>
                        <input id="phone" name="phone" type="tel"
                               value="<?= isset($phone) ? htmlspecialchars($phone) : '' ?>">
                    </div>
                    <div style="display:none">
                        <label for="website">Website</label>
                        <input id="website" name="website" autocomplete="off">
                    </div>
                </div>
                <div>
                    <label for="message">Nachricht *</label>
                    <textarea id="message" name="message"
                              required><?= isset($message) ? htmlspecialchars($message) : '' ?></textarea>
                </div>
                <button class="btn" type="submit">Nachricht senden</button>
            </form>

            <div class="social" style="margin-top:22px">
                <a href="https://instagram.com/" target="_blank" rel="noopener"
                   aria-label="Instagram">Instagram</a>
                <a href="mailto:<?= htmlspecialchars($recipient) ?>" aria-label="Email">E-Mail</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
</body>
</html>

