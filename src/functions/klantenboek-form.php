<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo 'Method Not Allowed';
    exit;
}

// Haal de gegevens uit de POST
$naam = $_POST['naam'] ?? '';
$bedrijfsnaam = $_POST['bedrijfsnaam'] ?? '';
$verhaal = $_POST['verhaal'] ?? '';
$sterren = $_POST['sterren'] ?? '';

if (empty($naam) || empty($bedrijfsnaam) || empty($verhaal) || empty($sterren)) {
    http_response_code(400);
    echo 'Bad Request';
    exit;
}

// echo $naam . "\n" . $bedrijfsnaam . "\n" . $verhaal . "\n" . $sterren;
// exit;

// Lees bestaande data uit de JSON
$stories_json = file_get_contents(__DIR__ . '/../data/klantenboek-data.json');
$stories = json_decode($stories_json, true);

// Voeg het nieuwe verhaal toe aan de array
// Unshift zet de nieuwe entry aan het begin van de array
array_unshift($stories, [
    'naam' => htmlspecialchars($naam),
    'bedrijfsnaam' => htmlspecialchars($bedrijfsnaam),
    'datum' => date('Y-m-d'),
    'datumTekst' => date('d F Y'),
    'verhaal' => htmlspecialchars($verhaal),
    'sterren' => (int) $sterren
]);

// Convert de bijgewerkte array terug naar JSON
$stories_json_new = json_encode($stories, JSON_PRETTY_PRINT);

// Schrijf de data terug naar de JSON file
file_put_contents(__DIR__ . '/../data/klantenboek-data.json', $stories_json_new);
header('Location: /src/pages/klantenboek.php');
exit;