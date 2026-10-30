<?php
$pageTitle = 'nav.customerstories';
$activePage = 'klantenboek';

$stories_json = file_get_contents(__DIR__ . '/../data/klantenboek-data.json');
if ($stories_json === false)
    die('Error reading the JSON file');

$stories = json_decode($stories_json, true);
if ($stories === null)
    die('Error decoding the JSON file');

include __DIR__ . '/../components/head.php';
?>

<body>
    <?php include __DIR__ . '/../components/navbar.php'; ?>
    <link rel="stylesheet" href="/src/css/klantenboek.css">

    <main>
        <section class="hero">
            <img class="hero-bg" src="/src/img/klantenboek/hero.png" alt="">

            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title"><?= t('stories.hero.title') ?></h1>
                    <p class="hero-text"><?= t('stories.hero.text') ?></p>
                </div>
            </div>
        </section>

        <section class="stories">
            <div class="container">
                <h2 class="stories-title"><?= t('stories.title') ?></h2>

                <ul class="stories-grid">
                    <?php foreach ($stories as $story): ?>
                        <li>
                            <article class="story-card">
                                <header class="story-card-header">
                                    <img class="story-card-icon" src="/src/img/klantenboek/icons/building.svg" alt="">
                                    <div>
                                        <h3 class="story-card-company-name"><?= $story['bedrijfsnaam'] ?>
                                        </h3>
                                        <time class="story-card-date"
                                            datetime="<?= $story['datum'] ?>"><?= $story['datumTekst'] ?></time>
                                    </div>
                                </header>

                                <blockquote class="story-card-quote"><?= $story['verhaal'] ?> <span>-
                                        <?= $story['naam'] ?></span></blockquote>

                                <div class="story-card-rating" role="img"
                                    aria-label="<?= $story['sterren'] ?> <?= t('stories.rating') ?>">
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                        <img src="/src/img/klantenboek/icons/<?= $i <= $story['sterren'] ? 'star-filled' : 'star-outline' ?>.svg"
                                            alt="">
                                    <?php endfor; ?>
                                </div>
                            </article>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>

        <section class="form">
            <div class="container">
                <h2 class="form-title"><?= t('stories.form.title') ?></h2>
                <p class="form-subtitle"><?= t('stories.form.subtitle') ?></p>

                <form action="/src/functions/klantenboek-form.php" method="post" class="form-container">
                    <label for="naam"><?= t('stories.form.name') ?></label>
                    <input type="text" id="naam" name="naam" placeholder="<?= t('stories.form.name.placeholder') ?>" required>

                    <label for="bedrijfsnaam"><?= t('stories.form.company') ?></label>
                    <input type="text" id="bedrijfsnaam" name="bedrijfsnaam" placeholder="<?= t('stories.form.company.placeholder') ?>" required>

                    <label for="verhaal"><?= t('stories.form.story') ?></label>
                    <textarea id="verhaal" name="verhaal" rows="3"
                        placeholder="<?= t('stories.form.story.placeholder') ?>" required></textarea>

                    <label for="star-1"><?= t('stories.form.rating') ?></label>
                    <div class="star-rating">
                        <?php for ($i = 5; $i >= 1; $i--): ?>
                            <input type="radio" id="star-<?= $i ?>" name="sterren" value="<?= $i ?>" required>

                            <label for="star-<?= $i ?>">
                                <img class="star-outline" src="/src/img/klantenboek/icons/star-outline.svg" alt="">
                                <img class="star-filled" src="/src/img/klantenboek/icons/star-filled.svg" alt="">
                            </label>
                        <?php endfor; ?>
                    </div>

                    <button type="submit"><?= t('stories.form.submit') ?> <img src="/src/img/klantenboek/icons/arrow-right.svg"
                            alt=""></button>
                </form>
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/../components/footer.php'; ?>
</body>

</html>