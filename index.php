<?php
$pageTitle = 'nav.home';
$activePage = 'home';
include __DIR__ . '/src/components/head.php';
?>
<body>
    <?php include __DIR__ . '/src/components/navbar.php'; ?>
    <link rel="stylesheet" href="/src/css/index.css">
    <main>
        <section class="home-hero">
            <img src="/src/img/index/hero.png" alt="">
            <div class="container">
                <h1><?= t('home.hero.title') ?></h1>
                <div class="home-hero-text">
                    <p><?= t('home.hero.text') ?></p>
                </div>
                <a href="/src/pages/oplossingen.php" class="btn"><?= t('home.hero.button') ?></a>
            </div>
        </section>
        <section class="home-waarwevoorstaan">
            <h1><?= t('home.values.title') ?></h1>
            <div class="container">
                <div class="home-waarwevoorstaan-text">
                    <div class="home-card">
                        <img src="/src/img/index/icons/leaf.svg" alt="<?= t('home.values.simplicity.title') ?>">
                        <h2><?= t('home.values.simplicity.title') ?></h2>
                        <p><?= t('home.values.simplicity.text') ?></p>
                    </div>
                    <div class="home-card">
                        <img src="/src/img/index/icons/shield.svg" alt="<?= t('home.values.trust.title') ?>">
                        <h2><?= t('home.values.trust.title') ?></h2>
                        <p><?= t('home.values.trust.text') ?></p>
                    </div>
                    <div class="home-card">
                        <img src="/src/img/index/icons/settings.svg" alt="<?= t('home.values.functionality.title') ?>">
                        <h2><?= t('home.values.functionality.title') ?></h2>
                        <p><?= t('home.values.functionality.text') ?></p>
                    </div>
                </div>
            </div>
        </section> 
        <section class="home-dots">
            <img src="/src/img/index/dots.png" alt="D.O.T.S.">
            <div class="home-dots-container">
                <h1>D.O.T.S.</h1>
                <p><?= t('home.dots.text') ?></p>
                <a href="/src/pages/oplossingen.php"><?= t('home.dots.link') ?></a>
            </div>
        </section>
        <section class="home-reviews">
            <div class="container">
                <h1><?= t('home.review.quote') ?></h1>
                <p>-Mark van Dijk</p>
                <a href="/src/pages/klantenboek.php" class="btn"><?= t('home.review.button') ?></a>
            </div>
        </section>
        <section class="home-contact">
            <div class="container">
                <h1><?= t('home.contact.title') ?></h1>
                <p><?= t('home.contact.text') ?></p>
                <a href="/src/pages/contact.php" class="btn"><?= t('home.contact.button') ?></a>
            </div>
        </section>
    </main>
</body>
</html>
