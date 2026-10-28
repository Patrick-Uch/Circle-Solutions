<?php
$pageTitle = 'Contact';
$activePage = 'contact';
include __DIR__ . '/../components/head.php';
?>
<link rel="stylesheet" href="../css/contact.css">

<body>
    <?php include __DIR__ . '/../components/navbar.php'; ?>

    <main>
        <section class="contact-hero">
            <img src="../img/contact/hero.png" alt="">

            <div class="container">
                <div class="contact-hero-card">
                    <h1>Contact</h1>
                    <p>Heb je een vraag of wil je weten wat Circle Solutions voor jou organisatie kan betekenen? Neem contact met ons op.</p>
                </div>
            </div>
        </section>

        <section class="contact">
            <div class="container">
                <div class="contact-info">
                    <h2>Direct contact</h2>

                    <ul class="contact-list">
                        <li>
                            <img src="../img/contact/icons/mail.svg" alt="">
                            <h3>E-mail</h3>
                            <p>hi@circlesolutions.com</p>
                        </li>

                        <li>
                            <img src="../img/contact/icons/phone.svg" alt="">
                            <h3>Telefoon</h3>
                            <p>+31 6 12 34 56 78</p>
                        </li>

                        <li>
                            <img src="../img/contact/icons/map-pin.svg" alt="">
                            <h3>Adres</h3>
                            <p>Amersfoort, Nederland</p>
                        </li>
                    </ul>

                    <div class="contact-openings-hours">
                        <img src="../img/contact/icons/clock.svg" alt="">
                        <h3>We reageren meestal binnen 1 werkdag</h3>
                        <p>Maandag - Vrijdag: 9:00 - 17:00</p>
                    </div>

                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps?q=Amersfoort&output=embed"
                            title="Circle Solutions - Amersfoort"
                            allowfullscreen
                            loading="lazy">
                        </iframe>
                    </div>
                </div>

                <form action="mailto:hi@circlesolutions.com" method="post" enctype="text/plain" class="contact-form">
                    <h2>Stuur een bericht</h2>

                    <label for="name">Naam</label>
                    <input type="text" id="name" name="name" placeholder="Jouw naam" required>

                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Jouw e-mailadres" required>

                    <label for="subject">Onderwerp</label>
                    <select id="subject" name="subject" required>
                        <option value="" disabled selected>Kies een onderwerp</option>
                        <option value="algemeen">Algemene vraag</option>
                        <option value="offerte">Offerte aanvragen</option>
                        <option value="samenwerking">Samenwerking</option>
                        <option value="overig">Overig</option>
                    </select>

                    <label for="message">Bericht</label>
                    <textarea id="message" name="message" rows="5" placeholder="Jouw bericht" required></textarea>

                    <div class="contact-form-privacy">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">
                            Ik ga akkoord met de <a href="#privacy">Privacyverklaring</a>
                        </label>
                    </div>

                    <button type="submit">Verstuur</button>
                </form>
            </div>
        </section>

        <section class="faq">
            <div class="container">
                <div class="faq-text">
                    <h3>Veelgestelde vragen</h3>
                    <h2>Snel een antwoord?</h2>
                    <p>
                        Bekijk hier de antwoorden op de meest gestelde vragen.
                        Staat jouw vraag er niet tussen? Stuur ons gerust een bericht.
                    </p>
                </div>

                <div class="faq-questions">
                    <details name="faq">
                        <summary>Hoe snel kan ik een reactie verwachten?</summary>
                        <p>Wij streven ernaar om binnen 24 uur te reageren.</p>
                    </details>

                    <details name="faq">
                        <summary>Welke soorten organisaties helpen jullie?</summary>
                        <p>Wij helpen zowel kleine als grote organisaties.</p>
                    </details>

                    <details name="faq">
                        <summary>Bieden jullie ook maatwerkoplossingen?</summary>
                        <p>Ja, wij bieden oplossingen die aansluiten op jouw organisatie.</p>
                    </details>
                </div>
            </div>
        </section>
    </main>
</body>

</html>