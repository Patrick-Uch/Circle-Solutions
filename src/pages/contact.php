<?php
$pageTitle = 'nav.contact';
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
                    <h1><?= t('contact.hero.title') ?></h1>
                    <p><?= t('contact.hero.text') ?></p>
                </div>
            </div>
        </section>

        <section class="contact">
            <div class="container">
                <div class="contact-info">
                    <h2><?= t('contact.direct.title') ?></h2>

                    <ul class="contact-list">
                        <li>
                            <img src="../img/contact/icons/mail.svg" alt="">
                            <h3><?= t('contact.direct.email') ?></h3>
                            <p>hi@circlesolutions.com</p>
                        </li>

                        <li>
                            <img src="../img/contact/icons/phone.svg" alt="">
                            <h3><?= t('contact.direct.phone') ?></h3>
                            <p>+31 6 12 34 56 78</p>
                        </li>

                        <li>
                            <img src="../img/contact/icons/map-pin.svg" alt="">
                            <h3><?= t('contact.direct.address') ?></h3>
                            <p><?= t('contact.direct.address.value') ?></p>
                        </li>
                    </ul>

                    <div class="contact-openings-hours">
                        <img src="../img/contact/icons/clock.svg" alt="">
                        <h3><?= t('contact.hours.title') ?></h3>
                        <p><?= t('contact.hours.text') ?></p>
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
                    <h2><?= t('contact.form.title') ?></h2>

                    <label for="name"><?= t('contact.form.name') ?></label>
                    <input type="text" id="name" name="name" placeholder="<?= t('contact.form.name.placeholder') ?>" required>

                    <label for="email"><?= t('contact.form.email') ?></label>
                    <input type="email" id="email" name="email" placeholder="<?= t('contact.form.email.placeholder') ?>" required>

                    <label for="subject"><?= t('contact.form.subject') ?></label>
                    <select id="subject" name="subject" required>
                        <option value="" disabled selected><?= t('contact.form.subject.placeholder') ?></option>
                        <option value="algemeen"><?= t('contact.form.subject.general') ?></option>
                        <option value="offerte"><?= t('contact.form.subject.quote') ?></option>
                        <option value="samenwerking"><?= t('contact.form.subject.partnership') ?></option>
                        <option value="overig"><?= t('contact.form.subject.other') ?></option>
                    </select>

                    <label for="message"><?= t('contact.form.message') ?></label>
                    <textarea id="message" name="message" rows="5" placeholder="<?= t('contact.form.message.placeholder') ?>" required></textarea>

                    <div class="contact-form-privacy">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">
                            <?= t('contact.form.privacy') ?>
                        </label>
                    </div>

                    <button type="submit"><?= t('contact.form.submit') ?></button>
                </form>
            </div>
        </section>

        <section class="faq">
            <div class="container">
                <div class="faq-text">
                    <h3><?= t('contact.faq.label') ?></h3>
                    <h2><?= t('contact.faq.title') ?></h2>
                    <p><?= t('contact.faq.text') ?></p>
                </div>

                <div class="faq-questions">
                    <details name="faq">
                        <summary><?= t('contact.faq.q1') ?></summary>
                        <p><?= t('contact.faq.a1') ?></p>
                    </details>

                    <details name="faq">
                        <summary><?= t('contact.faq.q2') ?></summary>
                        <p><?= t('contact.faq.a2') ?></p>
                    </details>

                    <details name="faq">
                        <summary><?= t('contact.faq.q3') ?></summary>
                        <p><?= t('contact.faq.a3') ?></p>
                    </details>
                </div>
            </div>
        </section>
    </main>
</body>

</html>