<?php
$pageTitle = 'Klantenboek';
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
                    <h1 class="hero-title">Klantenboek</h1>
                    <p class="hero-text">Verhalen van organisaties die met Circle Solutions hun processen hebben
                        vereenvoudigd.</p>
                </div>
            </div>
        </section>

        <section class="stories">
            <div class="container">
                <h2 class="stories-title">Wat klanten over ons zeggen</h2>

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
                                    aria-label="<?= $story['sterren'] ?> van 5 sterren">
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
                <h2 class="form-title">Deel jouw verhaal</h2>
                <p class="form-subtitle">Ben jij klant bij Circle Solutions? Vertel ons hoe wij jouw organisatie hebben
                    geholpen.</p>

                <form action="/src/functions/klantenboek-form.php" method="post" class="form-container">
                    <label for="naam">Naam</label>
                    <input type="text" id="naam" name="naam" placeholder="Jouw naam" required>

                    <label for="bedrijfsnaam">Bedrijfsnaam</label>
                    <input type="text" id="bedrijfsnaam" name="bedrijfsnaam" placeholder="Naam van uw bedrijf" required>

                    <label for="verhaal">Jouw verhaal</label>
                    <textarea id="verhaal" name="verhaal" rows="3"
                        placeholder="Vertel hoe je Circle Solutions hebt ervaren" required></textarea>

                    <label for="star-1">Beoordeling</label>
                    <div class="star-rating">
                        <?php for ($i = 5; $i >= 1; $i--): ?>
                            <input type="radio" id="star-<?= $i ?>" name="sterren" value="<?= $i ?>" required>

                            <label for="star-<?= $i ?>">
                                <img class="star-outline" src="/src/img/klantenboek/icons/star-outline.svg" alt="">
                                <img class="star-filled" src="/src/img/klantenboek/icons/star-filled.svg" alt="">
                            </label>
                        <?php endfor; ?>
                    </div>

                    <button type="submit">Verhaal versturen <img src="/src/img/klantenboek/icons/arrow-right.svg"
                            alt=""></button>
                </form>
            </div>
        </section>
    </main>
</body>

</html>