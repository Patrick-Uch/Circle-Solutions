<?php
$langOptions = ['nl', 'en'];

$currentLang = 'nl';

// Controleer of er een taal parameter in de URL staat en of hij geldig is
if (isset($_GET['lang']) && in_array($_GET['lang'], $langOptions)) {
    $currentLang = $_GET['lang'];
}

// Haal de vertalingen op voor de huidige taal
$translations = require __DIR__ . '/../lang/' . $currentLang . '.php';

// Functie om een vertaling op te halen op basis van de key
function t($key) {
    global $translations;
    return $translations[$key] ?? $key;
}



// Functie om de volgende taal in de lijst op te halen
function getNextLangFromListAsString() {
    global $currentLang, $langOptions;
    $currentIndex = array_search($currentLang, $langOptions);
    $nextIndex = ($currentIndex + 1) % count($langOptions);
    return $langOptions[$nextIndex];
}

$nextLang = getNextLangFromListAsString();
