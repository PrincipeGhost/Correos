<?php
// save_tracking.php

// Configura el folder donde se guardarán los json
$folder = "trackings";
if (!file_exists($folder)) {
    mkdir($folder, 0777, true);
}

// Recoge los datos enviados por POST
$tracking_number = $_POST['tracking_number'] ?? '';
$recipient_name = $_POST['recipient_name'] ?? '';
$origin_country = $_POST['origin_country'] ?? '';
$origin_city = $_POST['origin_city'] ?? '';
$send_time = $_POST['send_time'] ?? '';
$destination_country = $_POST['destination_country'] ?? '';
$destination_city = $_POST['destination_city'] ?? '';
$status = $_POST['status'] ?? '';

if (!$tracking_number) {
    echo json_encode(['success' => false, 'error' => 'No tracking number provided']);
    exit;
}

// Creamos el array
$data = [
    'tracking_number' => $tracking_number,
    'recipient_name' => $recipient_name,
    'origin_country' => $origin_country,
    'origin_city' => $origin_city,
    'send_time' => $send_time,
    'destination_country' => $destination_country,
    'destination_city' => $destination_city,
    'status' => $status
];

// Guardamos en un archivo JSON con el nombre del tracking
file_put_contents("$folder/$tracking_number.json", json_encode($data, JSON_PRETTY_PRINT));

echo json_encode(['success' => true, 'message' => 'Tracking saved']);
