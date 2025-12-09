<?php
$current = $current ?? '';
?>

<header class="site-header" aria-label="Kopfbereich">
    <div class="container brander">
        <a href="index.php" class="brand">
            <img src="assets/logo_round.png" alt="Logo Doula Sibylle" width="128" height="128"/>
            <h1>doula sibylle</h1>
        </a>

        <button class="burger" id="burger" aria-label="Menü" aria-expanded="false">
            <span></span>
        </button>

        <nav id="mainnav" role="navigation" aria-label="Hauptnavigation">
            <ul>
                <li><a href="index.php"
                       class="<?= $current === 'home' ? 'active' : '' ?>">Start</a></li>
                <li><a href="about.php" class="<?= $current === 'about' ? 'active' : '' ?>">Über
                        mich</a></li>
                <li><a href="doula.php"
                       class="<?= $current === 'doula' ? 'active' : '' ?>">Doula</a>
                </li>
                <li><a href="offers.php" class="<?= $current === 'offers' ? 'active' : '' ?>">Angebote</a>
                </li>
                <li><a href="contact.php" class="<?= $current === 'contact' ? 'active' : '' ?>">Kontakt</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
