<?php
// Teksten en afbeeldingen voor de oplossingen pagina
// De teksten zelf staan in src/lang/nl.php en src/lang/en.php

require_once __DIR__ . '/../functions/i18n.php';

// Icoontjes staan in src/img/oplossingen/icons
$solutions = [
    [
        'title' => t('solutions.logistics.title'),
        'text' => t('solutions.logistics.text'),
        'icon' => 'logistiek.png',
    ],
    [
        'title' => t('solutions.healthcare.title'),
        'text' => t('solutions.healthcare.text'),
        'icon' => 'zorg.png',
    ],
    [
        'title' => t('solutions.education.title'),
        'text' => t('solutions.education.text'),
        'icon' => 'onderwijs.png',
    ],
    [
        'title' => t('solutions.processmanagement.title'),
        'text' => t('solutions.processmanagement.text'),
        'icon' => 'procesbeheer.png',
    ],
    [
        'title' => t('solutions.automation.title'),
        'text' => t('solutions.automation.text'),
        'icon' => 'procesautomatisering.png',
    ],
    [
        'title' => t('solutions.integrations.title'),
        'text' => t('solutions.integrations.text'),
        'icon' => 'koppelingen.png',
    ],
];

// Filters: 'key' => 'label'. Bij een nieuwe key ook de CSS aanpassen
$filters = [
    'alle' => t('solutions.filter.all'),
    'maatwerk' => t('solutions.filter.custom'),
    'proces' => t('solutions.filter.process'),
    'web' => t('solutions.filter.web'),
];

// Foto's staan in src/img/oplossingen/projecten
// challenge, solution en result staan in de project modal
// 'key' verwijst naar project.<key>.* in de taalbestanden
$projects = [
    [
        'key' => 'logistics',
        'tags' => ['maatwerk', 'proces'],
        'image' => 'logistiek-platform.png',
    ],
    [
        'key' => 'planning',
        'tags' => ['maatwerk', 'web'],
        'image' => 'planningsapp.png',
    ],
    [
        'key' => 'integration',
        'tags' => ['proces', 'web'],
        'image' => 'integratieplatform.png',
    ],
    [
        'key' => 'ecommerce',
        'tags' => ['maatwerk', 'web'],
        'image' => 'e-commerce-platform.png',
    ],
    [
        'key' => 'datadashboard',
        'tags' => ['proces', 'web'],
        'image' => 'datadashboard.png',
    ],
    [
        'key' => 'strategic',
        'tags' => ['maatwerk', 'proces'],
        'image' => 'strategisch-dashboard.png',
    ],
];

// Vul de teksten van elk project in vanuit de taalbestanden
foreach ($projects as &$project) {
    foreach (['title', 'text', 'challenge', 'solution', 'result'] as $field) {
        $project[$field] = t('project.' . $project['key'] . '.' . $field);
    }
}
unset($project);
