<?php
$pageTitle = 'Home';
$activePage = 'home';
include __DIR__ . '/src/components/head.php';
?>
<body>
    <?php include __DIR__ . '/src/components/navbar.php'; ?>
    <link rel="stylesheet" href="/src/css/index.css">

    <main class="page-content">
        <div class="container">
            <div class="hero">
                <h1>Just connect the <span class="altcolor">dots</span>.</h1>
                <p class="altcolor">Maatwerksoftware die complexe<br>processen simpel maakt. Zonder<br>poespas, mét resultaat.</p>
                <br>
                <a href="/src/pages/oplossingen.php" class="btn">Ontdek onze oplossingen -></a>
            </div>
            <div class="waarwevoorstaan">
                <h1>Waar we voor staan</h1>
                <br>
                <div class="boxes">
                    <div>
                        <img src="/src/img/index/leaf.svg" alt=" Eenvoud">
                        <h2>Eenvoud</h2>
                        <p>Geen overbodige functies of ingewikkelde systemen. Alleen wat echt nodig is.</p>
                    </div>
                    <div>
                        <img src="/src/img/index/shield.svg" alt="Vertrouwen">
                        <h2>Vertrouwen</h2>
                        <p>Betrouwbare oplossingen waar je dagelijks op kunt bouwen.</p>
                    </div>
                    <div>
                        <img src="/src/img/index/settings.svg" alt="Functionaliteit">
                        <h2>Functionaliteit</h2>
                        <p>Software die aansluit op jouw processen en bijdraagt aan efficiëntie.</p>
                    </div>
                </div>
            </div>
            <div class="dots">
                <img src="/src/img/index/dots.png" alt="D.O.T.S.">
                <div class="dots-container">
                    <h1>D.O.T.S.</h1>
                    <p>Circle D.O.T.S. is ons modulaire platform waarmee bedrijven hun interne processen stroomlijnen: flexibel, schaalbaar en op maat.</p>
                    <a href="/src/pages/oplossingen.php">Meer over oplossingen -></a>
                </div>
            </div>
            <div class="reviews">
                <h1>"Dankzij Circle Solutions lopen onze systemen soepel."</h1>
                <p>-Mark van Dijk</p>
                <a href="/src/pages/klantenboek.php" class="btn">Lees meer verhalen in het Klantenboek -></a>
            </div>
            <div class="contact">
                <h1>Klaar voor een website die past bij jouw bedrijf?</h1>
                <p>Vraag een vrijblijvend voorstel op maat aan en ontdek wat Circle Solutions voor jouw organisatie kan doen.</p>
                <a href="/src/pages/oplossingen.php" class="btn">Neem contact op -></a>
            </div>
        </div>
    </main>
</body>
</html>
