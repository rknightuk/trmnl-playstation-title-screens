<?php

$grouped = json_decode(file_get_contents('../data/screens.json'), true);
$screen = $grouped[array_rand($grouped)];

header("Content-Type: application/json");

echo json_encode([
    'screen' => 'https://raw.githubusercontent.com/rknightuk/trmnl-dreamcast-title-screens/main/' . $screen,
]);
