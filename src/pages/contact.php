<?php
$pageTitle = 'Contact';
$activePage = 'contact';
include __DIR__ . '/../components/head.php';
?>
<link rel="stylesheet" href="../css/contact.css">

<body>
    <?php include __DIR__ . '/../components/navbar.php'; ?>
    <main class="">
        <section class="contact-hero">
            <img src="../img/contact/hero.png" alt="">
            <div class="container">
                <div class="contact-hero-card">
                    <h1>Contact</h1>
                    <p>Heb je een vraag of wil je weten wat Circle Solutions voor jou organisatie kan betekenen? Neem contact met ons op.</p>
                </div>
            </div>
        </section>
        <section class="contact-info">
            <div class="contact-info">
                <h2>Direct contact</h2>
            </div>
            <div></div>
        </section>
        <section class="faq">
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
        </section>
    </main>
</body>

</html>