<?php
$pageTitle = 'Home';
$activePage = 'home';
include __DIR__ . '/src/components/head.php';
?>
<body>
    <?php include __DIR__ . '/src/components/navbar.php'; ?>
    <link rel="stylesheet" href="/src/css/index.css">
    <main>
        <section class="home-hero">
            <img src="/src/img/index/hero.png" alt="Just connect the dots">
            <div class="container">
                <h1>Just connect the <b>dots</b>.</h1>
                <div class="home-hero-text">
                    <p>Maatwerksoftware die complexe processen simpel maakt. Zonder poespas, mét resultaat.</p>
                </div>
                <a href="/src/pages/oplossingen.php" class="btn">Ontdek onze oplossingen →</a>
            </div>
        </section>
        <section class="home-waarwevoorstaan">
            <h1>Waar we voor staan</h1>
            <div class="container">
                <div class="home-waarwevoorstaan-text">
                    <div class="home-card">
                        <img src="/src/img/index/icons/leaf.svg" alt="Eenvoud">
                        <h2>Eenvoud</h2>
                        <p>Geen overbodige functies of ingewikkelde systemen. Alleen wat nodig is.</p>
                    </div>
                    <div class="home-card">
                        <img src="/src/img/index/icons/shield.svg" alt="Vertrouwen">
                        <h2>Vertrouwen</h2>
                        <p>Betrouwbare oplossingen waar je dagelijks op kunt bouwen.</p>
                    </div>
                    <div class="home-card">
                        <img src="/src/img/index/icons/settings.svg" alt="Functionaliteit">
                        <h2>Functionaliteit</h2>
                        <p>Software die aansluit op jouw processen en bijdraagt aan efficiëntie.</p>
                    </div>
                </div>
            </div>
        </section> 
        <section class="home-dots">
            <img src="/src/img/index/dots.png" alt="D.O.T.S.">
            <div class="home-dots-container">
                <h1>D.O.T.S.</h1>
                <p>Circle D.O.T.S. is ons modulaire platform waarmee bedrijven hun interne processen stroomlijnen: flexibel, schaalbaar en op maat.</p>
                <a href="/src/pages/oplossingen.php">Meer over oplossingen →</a>
            </div>
        </section>
        <section class="home-reviews">
            <div class="container">
                <h1>"Dankzij Circle Solutions lopen onze systemen soepel."</h1>
                <p>-Mark van Dijk</p>
                <a href="/src/pages/klantenboek.php" class="btn">Lees meer verhalen in het Klantenboek →</a>
            </div>
        </section>
        <section class="home-contact">
            <div class="container">
                <h1>Klaar voor een website die past bij jouw bedrijf?</h1>
                <p>Vraag een vrijblijvend voorstel op maat aan en ontdek wat Circle Solutions voor jouw organisatie kan doen.</p>
                <a href="/src/pages/contact.php" class="btn">Neem contact op →</a>
            </div>
        </section>
    </main>
</body>
</html>
