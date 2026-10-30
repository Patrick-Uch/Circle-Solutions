<?php
// Gedeelde <head> voor alle pagina's.
// Verwacht dat de pagina een $pageTitle heeft voordat dit bestand wordt ingeladen.

require_once __DIR__ . '/../functions/i18n.php'
?>
<!DOCTYPE html>
<html lang="<?= $currentLang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= t($pageTitle) ?> - Circle Solutions</title>
    <link rel="preload" href="/src/fonts/test-calibre-regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/src/fonts/test-calibre-bold.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="icon" href="/src/img/favicon.ico">
    <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/src/css/style.css"></script>
</head>
