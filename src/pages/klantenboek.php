<?php
$pageTitle = 'Klantenboek';
$activePage = 'klantenboek';
include __DIR__ . '/../components/head.php';
?>

<body>
    <?php include __DIR__ . '/../components/navbar.php'; ?>
    <link rel="stylesheet" href="/src/css/klantenboek.css">

    <main>
        <section class="hero">
            <img src="/src/img/klantenboek/hero.png" alt="">

            <div class="container">
                <div>
                    <h1>Klantenboek</h1>
                    <p>Verhalen van organisaties die met Circle Solutions hun processen hebben vereenvoudigd.</p>
                </div>
            </div>
        </section>

        <section class="stories">
            <div class="container">
                <h2>Wat klanten over ons zeggen</h2>

                <ul>
                    <li>
                        <article>
                            <header>
                                <img src="/src/img/klantenboek/icons/building.svg" alt="">
                                <div>
                                    <h3>Zorggroep De Linde</h3>
                                    <time datetime="2026-01-18">18 januari 2026</time>
                                </div>
                            </header>

                            <blockquote>Dankzij Circle Solutions hebben we ons rooster eindelijk op één plek. Het
                                scheelt ons team uren per week.</blockquote>

                            <div>
                                <img src="/src/img/klantenboek/icons/star-filled.svg" alt="">
                                <img src="/src/img/klantenboek/icons/star-filled.svg" alt="">
                                <img src="/src/img/klantenboek/icons/star-filled.svg" alt="">
                                <img src="/src/img/klantenboek/icons/star-filled.svg" alt="">
                                <img src="/src/img/klantenboek/icons/star-filled.svg" alt="">
                            </div>
                        </article>
                    </li>

                    <li>
                        <article>
                            <header>
                                <img src="/src/img/klantenboek/icons/building.svg" alt="">
                                <div>
                                    <h3>Zorggroep De Linde</h3>
                                    <time datetime="2026-01-18">18 januari 2026</time>
                                </div>
                            </header>

                            <blockquote>Dankzij Circle Solutions hebben we ons rooster eindelijk op één plek. Het
                                scheelt ons team uren per week.</blockquote>

                            <div>
                                <img src="/src/img/klantenboek/icons/star-filled.svg" alt="">
                                <img src="/src/img/klantenboek/icons/star-filled.svg" alt="">
                                <img src="/src/img/klantenboek/icons/star-filled.svg" alt="">
                                <img src="/src/img/klantenboek/icons/star-filled.svg" alt="">
                                <img src="/src/img/klantenboek/icons/star-filled.svg" alt="">
                            </div>
                        </article>
                    </li>
                </ul>
            </div>
        </section>
    </main>
</body>

</html>