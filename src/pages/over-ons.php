<?php
$pageTitle = 'nav.about';
$activePage = 'over-ons';
include __DIR__ . '/../components/head.php';
?>
<body>
    <link rel="stylesheet" href="/src/css/over-ons.css">

    <?php include __DIR__ . '/../components/navbar.php'; ?>

    <main>
        <section class="over-ons-hero">
            <img src="/src/img/over-ons/hero.png" alt="">
            <div class="container">
                <div class="over-ons-hero-text">
                    <h1><?= t('about.hero.title') ?></h1>
                    <p><?= t('about.hero.text') ?></p>
                </div>
            </div>
        </section>
        <section class="over-ons-visie-missie">
            <div class="over-ons-visie-missie-text">
                <div class="over-ons-column-container">
                    <h2><?= t('about.vision.title') ?></h2>
                    <p><?= t('about.vision.text') ?></p>
                </div>
                <div class="over-ons-column-container">
                    <h2><?= t('about.mission.title') ?></h2>
                    <p><?= t('about.mission.text') ?></p>
                </div>
            </div>
            <div class="over-ons-waaromhoewat">
                <div class="over-ons-column-container">
                    <img src="/src/img/over-ons/icons/target.svg" alt="<?= t('about.why.title') ?>">
                    <h2><?= t('about.why.title') ?></h2>
                    <p><?= t('about.why.text') ?></p>
                </div>
                <div class="over-ons-column-container">
                    <img src="/src/img/over-ons/icons/settings.svg" alt="<?= t('about.how.title') ?>">
                    <h2><?= t('about.how.title') ?></h2>
                    <p><?= t('about.how.text') ?></p>
                </div>
                <div class="over-ons-column-container">
                    <img src="/src/img/over-ons/icons/package.svg" alt="<?= t('about.what.title') ?>">
                    <h2><?= t('about.what.title') ?></h2>
                    <p><?= t('about.what.text') ?></p>
                </div>
            </div>
        </section>
        <section class="over-ons-kernwaarden">
            <h1><?= t('about.values.title') ?></h1>
            <div class="container">
                <div class="over-ons-kernwaarden-text">
                    <div class="over-ons-card">
                        <img src="/src/img/over-ons/icons/leaf.svg" alt="<?= t('about.values.simplicity.title') ?>">
                        <h2><?= t('about.values.simplicity.title') ?></h2>
                        <p><?= t('about.values.simplicity.text') ?></p>
                    </div>
                    <div class="over-ons-card">
                        <img src="/src/img/over-ons/icons/shield.svg" alt="<?= t('about.values.trust.title') ?>">
                        <h2><?= t('about.values.trust.title') ?></h2>
                        <p><?= t('about.values.trust.text') ?></p>
                    </div>
                    <div class="over-ons-card">
                        <img src="/src/img/over-ons/icons/settings.svg" alt="<?= t('about.values.functionality.title') ?>">
                        <h2><?= t('about.values.functionality.title') ?></h2>
                        <p><?= t('about.values.functionality.text') ?></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="over-ons-geschiedenis">
            <img src="/src/img/over-ons/kantoor.png" alt="<?= t('about.history.alt') ?>">
            <div class="over-ons-geschiedenis-container">
                <h1><?= t('about.history.title') ?></h1>
                <p><?= t('about.history.text1') ?></p>
                <p><?= t('about.history.text2') ?></p>
                <p><?= t('about.history.text3') ?></p>
            </div>
        </section>
        <section class="over-ons-team">
            <div class="container">
                <h4><?= t('about.team.label') ?></h4>
                <h1><?= t('about.team.title') ?></h1>
                <p><?= t('about.team.subtitle') ?></p>
            </div>
            <div class="over-ons-team-photos">
                <div class="over-ons-team-photo">
                    <img src="/src/img/over-ons/team/ceo.png" alt="Raymond Jacobs">
                    <h3>Raymond Jacobs</h3>
                    <p><?= t('about.team.ceo') ?></p>
                </div>
                <div class="over-ons-team-photo">
                    <img src="/src/img/over-ons/team/it-manager.png" alt="Elleke Smit">
                    <h3>Elleke Smit</h3>
                    <p><?= t('about.team.itmanager') ?></p>
                </div>
                <div class="over-ons-team-photo">
                    <img src="/src/img/over-ons/team/development-lead.png" alt="Sarah Kleinn">
                    <h3>Sarah Kleinn</h3>
                    <p><?= t('about.team.cao') ?></p>
                </div>
                <div class="over-ons-team-photo">
                    <img src="/src/img/over-ons/team/ux-designer.png" alt="John Doe">
                    <h3>John Doe</h3>
                    <p><?= t('about.team.uxdesigner') ?></p>
                </div>
            </div>
        </section>
        <?php include __DIR__ . '/../components/contact-cta.php'; ?>
    </main>
</body>
</html>
