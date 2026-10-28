<?php
$pageTitle = 'nav.solutions';
$activePage = 'oplossingen';
include __DIR__ . '/../data/oplossingen-data.php';
include __DIR__ . '/../components/head.php';
?>
<body>
    <?php // Eigen CSS voor deze pagina, zo zit de style.css van de anderen niet in de weg ?>
    <link rel="stylesheet" href="/src/css/oplossingen.css">

    <?php include __DIR__ . '/../components/navbar.php'; ?>

    <main>
        <section class="solutions-hero">
            <img src="/src/img/oplossingen/hero.png" alt="" class="solutions-hero-bg">
            <div class="container">
                <div class="solutions-hero-card">
                    <h1><?= t('solutions.hero.title') ?></h1>
                    <p><?= t('solutions.hero.text') ?></p>
                </div>
            </div>
        </section>

        <section class="solutions">
            <div class="container">
                <h2 class="section-title"><?= t('solutions.title') ?></h2>
                <div class="solutions-grid">
                    <?php foreach ($solutions as $solution): ?>
                        <div class="solution-card">
                            <img src="/src/img/oplossingen/icons/<?= $solution['icon'] ?>" alt="" class="solution-icon">
                            <h3><?= $solution['title'] ?></h3>
                            <p><?= $solution['text'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="dots-section">
            <div class="container">
                <div class="dots-text">
                    <h2>D.O.T.S.</h2>
                    <p><?= t('solutions.dots.text') ?></p>
                </div>
                <img src="/src/img/oplossingen/dots.png" alt="<?= t('solutions.dots.alt') ?>" class="dots-img">
            </div>
        </section>

        <section class="projects">
            <div class="container">
                <span class="section-label"><?= t('solutions.projects.label') ?></span>
                <h2 class="section-title"><?= t('solutions.projects.title') ?></h2>
                <p class="section-subtitle"><?= t('solutions.projects.subtitle') ?></p>

                <?php // Verborgen radio buttons voor het filter, zie CSS ?>
                <?php foreach ($filters as $key => $label): ?>
                    <input type="radio" name="project-filter" id="filter-<?= $key ?>" class="filter-input"<?= $key === 'alle' ? ' checked' : '' ?>>
                <?php endforeach; ?>

                <div class="filter-buttons">
                    <?php foreach ($filters as $key => $label): ?>
                        <label for="filter-<?= $key ?>" class="filter-btn filter-btn-<?= $key ?>"><?= $label ?></label>
                    <?php endforeach; ?>
                </div>

                <div class="projects-grid">
                    <?php foreach ($projects as $i => $project): ?>
                        <article class="project-card" data-tags="<?= implode(' ', $project['tags']) ?>">
                            <img src="/src/img/oplossingen/projecten/<?= $project['image'] ?>" alt="<?= $project['title'] ?>" class="project-img">
                            <div class="project-body">
                                <div class="project-tags">
                                    <?php foreach ($project['tags'] as $tag): ?>
                                        <span class="project-tag"><?= $filters[$tag] ?></span>
                                    <?php endforeach; ?>
                                </div>
                                <h3><?= $project['title'] ?></h3>
                                <p><?= $project['text'] ?></p>
                                <button type="button" popovertarget="project-<?= $i ?>" class="project-link"><?= t('solutions.projects.view') ?> <?php include __DIR__ . '/../components/icon-arrow.php'; ?></button>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>

                <?php // Project modals, openen met popovertarget. Sluiten met het kruisje, Esc of ernaast klikken ?>
                <?php foreach ($projects as $i => $project): ?>
                    <div id="project-<?= $i ?>" popover class="project-modal">
                        <button type="button" popovertarget="project-<?= $i ?>" popovertargetaction="hide" class="project-modal-close" aria-label="<?= t('common.close') ?>">&times;</button>
                        <img src="/src/img/oplossingen/projecten/<?= $project['image'] ?>" alt="<?= $project['title'] ?>" class="project-modal-img">
                        <div class="project-modal-body">
                            <div class="project-tags">
                                <?php foreach ($project['tags'] as $tag): ?>
                                    <span class="project-tag"><?= $filters[$tag] ?></span>
                                <?php endforeach; ?>
                            </div>
                            <h3><?= $project['title'] ?></h3>
                            <h4><?= t('solutions.projects.challenge') ?></h4>
                            <p><?= $project['challenge'] ?></p>
                            <h4><?= t('solutions.projects.solution') ?></h4>
                            <p><?= $project['solution'] ?></p>
                            <h4><?= t('solutions.projects.result') ?></h4>
                            <p><?= $project['result'] ?></p>
                            <a href="/src/pages/contact.php" class="btn"><?= t('common.cta') ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="whitepaper">
            <div class="container">
                <img src="/src/img/oplossingen/whitepaper.png" alt="<?= t('solutions.whitepaper.alt') ?>" class="whitepaper-img">
                <div class="whitepaper-text">
                    <h2><?= t('solutions.whitepaper.title') ?></h2>
                    <p><?= t('solutions.whitepaper.text') ?></p>
                </div>
                <a href="/src/img/oplossingen/whitepaper.docx" download class="btn"><?= t('solutions.whitepaper.button') ?></a>
            </div>
        </section>

        <?php include __DIR__ . '/../components/contact-cta.php'; ?>
    </main>
</body>
</html>
