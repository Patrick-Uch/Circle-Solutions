<?php
// Menu items: 'key' => ['label', 'href']
// Als de key gelijk is aan $activePage krijgt de link de active class
$navItems = [
    'home' => ['Home', '/index.php'],
    'over-ons' => ['Over ons', '/src/pages/over-ons.php'],
    'oplossingen' => ['Oplossingen', '/src/pages/oplossingen.php'],
    'klantenboek' => ['Klantenboek', '/src/pages/klantenboek.php'],
    'contact' => ['Contact', '/src/pages/contact.php'],
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
                <a href="#" class="lang-switch">
                    <img src="/src/img/001-united-kingdom.png" alt="English">
                </a>
                <a href="/src/pages/contact.php" class="btn">Plan een kennismaking</a>
            </div>
        </nav>
    </div>
</header>
