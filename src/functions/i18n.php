<?php
$langOptions = ['nl', 'en'];

// Taalknop geklikt: zet de cookie en herlaad de pagina zonder ?lang=
if (isset($_GET['lang']) && in_array($_GET['lang'], $langOptions)) {
    setcookie('lang', $_GET['lang'], time() + (3600 * 24 * 30), '/'); // Cookie geldig voor 30 dagen
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit;
}

// Controleer of er een lang cookie bestaat en of hij geldig is
if (isset($_COOKIE['lang']) && in_array($_COOKIE['lang'], $langOptions)) {
    // Stel de huidige taal in op de waarde van het cookie
    $currentLang = $_COOKIE['lang'];
} else {
    // Standaardtaal instellen als er geen geldig cookie is
    $currentLang = 'nl';
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
