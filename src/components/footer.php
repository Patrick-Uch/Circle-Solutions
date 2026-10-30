<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-brand">
                <h2>Circle Solutions</h2>
                <p><?= t('footer.tagline') ?></p>

                <div class="footer-socials">
                    <a href="#" aria-label="LinkedIn">
                        <img src="/src/img/linkedin.svg" alt="linkedin">
                    </a>
                    <a href="#" aria-label="Instagram">
                        <img src="/src/img/instagram.svg" alt="instagram">
                    </a>
                    <a href="#" aria-label="Facebook">
                        <img src="/src/img/facebook.svg" alt="facebook">
                    </a>
                </div>
            </div>

            <nav class="footer-navigation" aria-label="<?= t('footer.nav.label') ?>">
                <h3><?= t('footer.nav.title') ?></h3>
                <ul>
                    <li><a href="/"><?= t('nav.home') ?></a></li>
                    <li><a href="/src/pages/over-ons.php"><?= t('nav.about') ?></a></li>
                    <li><a href="/src/pages/oplossingen.php"><?= t('nav.solutions') ?></a></li>
                    <li><a href="/src/pages/klantenboek.php"><?= t('nav.customerstories') ?></a></li>
                    <li><a href="/src/pages/contact.php"><?= t('nav.contact') ?></a></li>
                </ul>
            </nav>

            <div class="footer-contact">
                <h3><?= t('footer.contact.title') ?></h3>
                <ul>
                    <li><a href="mailto:hi@circlesolutions.com">hi@circlesolutions.com</a></li>
                    <li><a href="tel:+31612345678">+31 6 12 34 56 78</a></li>
                    <li><?= t('footer.contact.location') ?></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?= date('Y') ?> Circle Solutions - just connect the dots.</p>

            <div class="footer-legal">
                <a href="#"><?= t('footer.legal.terms') ?></a>
                <span>-</span>
                <a href="#"><?= t('footer.legal.privacy') ?></a>
            </div>
        </div>
    </div>
</footer>