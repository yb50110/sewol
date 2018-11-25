<?php

require_once __DIR__ . '/../../vendor/autoload.php';
//$app = require_once __DIR__ . '/../../bootstrap/app.php';
//$dotenv = new Dotenv\Dotenv(base_path());
//$dotenv->load();
//$dotenv->required(['DB_HOST', 'DB_USERNAME', 'DB_PASSWORD', 'DB_DATABASE']);

//$connection = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'), env('DB_DATABASE'));
//if (mysqli_connect_errno()) {
//    // Immediately throw an error so configuration problems can be found and diagnosed quickly
//    throw new RuntimeException('Failed to connect to MySQL: ' . mysqli_connect_error());
//}

$connection = new PDO('mysql:host=' . env('DB_HOST') . ';dbname=' . env('DB_DATABASE') . ';charset=utf8', env('DB_USERNAME'), env('DB_PASSWORD'));
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);