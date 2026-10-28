<?php
// Menu items: 'key' => ['label', 'href']
// Als de key gelijk is aan $activePage krijgt de link de active class
$navItems = [
    'home' => [t('nav.home'), '/index.php?lang=' . $currentLang],
    'over-ons' => [t('nav.about'), '/src/pages/over-ons.php?lang=' . $currentLang],
    'oplossingen' => [t('nav.solutions'), '/src/pages/oplossingen.php?lang=' . $currentLang],
    'klantenboek' => [t('nav.customerstories'), '/src/pages/klantenboek.php?lang=' . $currentLang],
    'contact' => [t('nav.contact'), '/src/pages/contact.php?lang=' . $currentLang],
];
?>
<header class="navbar">
    <div class="container">
        <a href="/index.php" class="logo">
            <img src="/src/img/logo.jpg" alt="Circle Solutions">
        </a>

        <!-- Checkbox voor de mobile menu toggle, zie CSS -->
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <label for="nav-toggle" class="nav-toggle-label" aria-label="Menu">
            <span></span>
            <span></span>
            <span></span>
        </label>

        <nav class="nav-menu">
            <ul class="nav-links">
                <?php // Loop door $navItems en maak voor elk item een link ?>
                <?php foreach ($navItems as $key => [$label, $href]): ?>
                    <li><a href="<?= $href ?>"<?= $key === $activePage ? ' class="active"' : '' ?>><?= $label ?></a></li>
                <?php endforeach; ?>
            </ul>
            <div class="nav-actions">
                <a href="?lang=<?= $nextLang ?>" class="lang-switch">
                    <img src="/src/img/<?= $nextLang ?>.png" alt="English">
                </a>
                <a href="/src/pages/contact.php" class="btn"><?= t('nav.cta') ?></a>
            </div>
        </nav>
    </div>
</header>
