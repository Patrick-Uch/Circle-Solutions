<?php
// Teksten en afbeeldingen voor de oplossingen pagina

// Icoontjes staan in src/img/oplossingen/icons
$solutions = [
    [
        'title' => 'Logistiek',
        'text' => 'Software die planning, voorraad en transport overzichtelijk maakt.',
        'icon' => 'logistiek.png',
    ],
    [
        'title' => 'Zorg',
        'text' => 'Betrouwbare systemen voor zorgprocessen, zonder afleiding.',
        'icon' => 'zorg.png',
    ],
    [
        'title' => 'Onderwijs',
        'text' => 'Tools die administratieve taken verlichten, zodat er tijd overblijft voor onderwijs.',
        'icon' => 'onderwijs.png',
    ],
    [
        'title' => 'Procesbeheer',
        'text' => 'Combineer alle interne workflows in één overzichtelijk platform.',
        'icon' => 'procesbeheer.png',
    ],
    [
        'title' => 'Procesautomatisering',
        'text' => 'Facturen, rapportages en goedkeuringen die vanzelf lopen. Bespaar tijd.',
        'icon' => 'procesautomatisering.png',
    ],
    [
        'title' => 'Koppelingen',
        'text' => 'Losse systemen die niet met elkaar praten? Wij verbinden ze. Just connect the dots.',
        'icon' => 'koppelingen.png',
    ],
];

// Filters: 'key' => 'label'. Bij een nieuwe key ook de CSS aanpassen
$filters = [
    'alle' => 'Alle cases',
    'maatwerk' => 'Maatwerksoftware',
    'proces' => 'Procesoptimalisatie',
    'web' => 'Webapplicaties',
];

// Foto's staan in src/img/oplossingen/projecten
// challenge, solution en result staan in de project modal
$projects = [
    [
        'title' => 'Logistiek platform voor routeplanning',
        'text' => 'Maatwerksoftware die planning, voorraad en transport samenbrengt.',
        'tags' => ['maatwerk', 'proces'],
        'image' => 'logistiek-platform.png',
        'challenge' => 'Planners werkten met losse Excel-lijsten voor routes, voorraad en chauffeurs. Wijzigingen kwamen te laat door en ritten werden dubbel ingepland.',
        'solution' => 'Eén platform waarin routes, voorraad en beschikbaarheid van chauffeurs samenkomen. Routes worden automatisch voorgesteld op basis van locatie en laadruimte.',
        'result' => 'Minder planningsfouten en een volledig overzicht van alle ritten op één scherm.',
    ],
    [
        'title' => 'Planningsapp voor zorginstelling',
        'text' => 'Roosters, taken en cliëntinformatie overzichtelijk op één plek.',
        'tags' => ['maatwerk', 'web'],
        'image' => 'planningsapp.png',
        'challenge' => 'Roosters werden op papier en via losse appjes rondgestuurd. Zorgmedewerkers wisten niet altijd wie wanneer bij welke cliënt moest zijn.',
        'solution' => 'Een planningsapp op tablet en telefoon met roosters, taken en de belangrijkste cliëntinformatie. Wijzigingen zijn direct voor iedereen zichtbaar.',
        'result' => 'Minder tijd kwijt aan plannen en meer tijd voor de zorg zelf.',
    ],
    [
        'title' => 'Integratieplatform voor slimme koppelingen',
        'text' => 'Systemen die eerst los stonden, wisselen nu automatisch gegevens uit.',
        'tags' => ['proces', 'web'],
        'image' => 'integratieplatform.png',
        'challenge' => 'Webshop, boekhouding en CRM stonden los van elkaar. Bestellingen en klantgegevens werden met de hand overgetypt.',
        'solution' => 'Een integratieplatform dat de systemen aan elkaar koppelt. Gegevens worden automatisch en op het juiste moment doorgezet.',
        'result' => 'Geen dubbel werk meer en geen fouten door overtypen. Just connect the dots.',
    ],
    [
        'title' => 'E-commerce platform voor productbeheer',
        'text' => 'Eén beheeromgeving voor producten, voorraad en bestellingen.',
        'tags' => ['maatwerk', 'web'],
        'image' => 'e-commerce-platform.png',
        'challenge' => 'Productinformatie stond verspreid over meerdere systemen, waardoor prijzen en voorraad in de webshop niet klopten.',
        'solution' => 'Een centrale beheeromgeving waarin producten, foto\'s, prijzen en voorraad op één plek worden bijgehouden en direct naar de webshop gaan.',
        'result' => 'Altijd actuele productinformatie en nieuwe producten sneller online.',
    ],
    [
        'title' => 'Datadashboard voor betere sturing',
        'text' => 'Realtime inzicht in de belangrijkste cijfers van de organisatie.',
        'tags' => ['proces', 'web'],
        'image' => 'datadashboard.png',
        'challenge' => 'Cijfers werden maandelijks met de hand verzameld. Tegen de tijd dat het rapport klaar was, was het alweer verouderd.',
        'solution' => 'Een dashboard dat gegevens uit de bestaande systemen ophaalt en de belangrijkste cijfers realtime laat zien.',
        'result' => 'Direct inzicht in omzet, gebruikers en conversie, zonder handwerk.',
    ],
    [
        'title' => 'Strategisch dashboard voor groeibedrijf',
        'text' => 'Rapportages die vanzelf worden bijgewerkt, zodat keuzes sneller gemaakt worden.',
        'tags' => ['maatwerk', 'proces'],
        'image' => 'strategisch-dashboard.png',
        'challenge' => 'Door de snelle groei had het management geen goed overzicht meer van orders, producten en klanten.',
        'solution' => 'Een strategisch dashboard met rapportages die automatisch worden bijgewerkt en per afdeling te filteren zijn.',
        'result' => 'Snellere beslissingen op basis van actuele cijfers.',
    ],
];
