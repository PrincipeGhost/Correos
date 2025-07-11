<?php
// get_tracking.php

header('Content-Type: application/json');

$folder = "trackings";
$tracking_number = $_GET['text'] ?? '';

if (!$tracking_number) {
    echo json_encode(['error' => 'No tracking number provided']);
    exit;
}

$file = "$folder/$tracking_number.json";

if (file_exists($file)) {
    echo file_get_contents($file);
} else {
    // Para simular un API real, devolvemos 204 (sin contenido)
    http_response_code(204);
}
