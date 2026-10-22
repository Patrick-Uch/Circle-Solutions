<?php
$pageTitle = 'Oplossingen';
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
                    <h1>Oplossingen</h1>
                    <p>Maatwerksoftware voor uiteenlopende sectoren en processen. Praktisch, schaalbaar en zonder overbodige complexiteit.</p>
                </div>
            </div>
        </section>

        <section class="solutions">
            <div class="container">
                <h2 class="section-title">Onze oplossingen</h2>
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
                    <p>Onze D.O.T.S. (Digital Office Tools &amp; Solutions) is een modulair platform dat interne processen samenbrengt. Bedrijven combineren precies de modules die ze nodig hebben, niet meer en niet minder.</p>
                </div>
                <img src="/src/img/oplossingen/dots.png" alt="D.O.T.S. verbindt werk en technologie" class="dots-img">
            </div>
        </section>

        <section class="projects">
            <div class="container">
                <span class="section-label">Cases</span>
                <h2 class="section-title">Echte projecten, echte resultaten</h2>
                <p class="section-subtitle">Een greep uit het maatwerk dat we voor onze klanten hebben gebouwd.</p>

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
                                <button type="button" popovertarget="project-<?= $i ?>" class="project-link">Bekijk project &rarr;</button>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>

                <?php // Project modals, openen met popovertarget. Sluiten met het kruisje, Esc of ernaast klikken ?>
                <?php foreach ($projects as $i => $project): ?>
                    <div id="project-<?= $i ?>" popover class="project-modal">
                        <button type="button" popovertarget="project-<?= $i ?>" popovertargetaction="hide" class="project-modal-close" aria-label="Sluiten">&times;</button>
                        <img src="/src/img/oplossingen/projecten/<?= $project['image'] ?>" alt="<?= $project['title'] ?>" class="project-modal-img">
                        <div class="project-modal-body">
                            <div class="project-tags">
                                <?php foreach ($project['tags'] as $tag): ?>
                                    <span class="project-tag"><?= $filters[$tag] ?></span>
                                <?php endforeach; ?>
                            </div>
                            <h3><?= $project['title'] ?></h3>
                            <h4>De uitdaging</h4>
                            <p><?= $project['challenge'] ?></p>
                            <h4>Onze oplossing</h4>
                            <p><?= $project['solution'] ?></p>
                            <h4>Het resultaat</h4>
                            <p><?= $project['result'] ?></p>
                            <a href="/src/pages/contact.php" class="btn">Plan een kennismaking</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="whitepaper">
            <div class="container">
                <img src="/src/img/oplossingen/whitepaper.png" alt="Whitepaper Efficiëntere processen met maatwerksoftware" class="whitepaper-img">
                <div class="whitepaper-text">
                    <h2>Onze whitepaper</h2>
                    <p>Download onze whitepaper en ontdek hoe wij organisaties helpen hun processen te optimaliseren.</p>
                </div>
                <a href="/src/img/oplossingen/whitepaper.docx" download class="btn">Download nu</a>
            </div>
        </section>
    </main>
</body>
</html>
