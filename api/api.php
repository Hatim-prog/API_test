<?php
header('Content-Type: application/json');

$data = [
    ["id" => 1, "name" => "Hatim", "age" => 20, "ville" => "Casablanca"],
    ["id" => 2, "name" => "Mouad", "age" => 25, "ville" => "Casablanca"],
    ["id" => 3, "name" => "Driss", "age" => 52, "ville" => "Barcelona"]
];

echo json_encode($data);