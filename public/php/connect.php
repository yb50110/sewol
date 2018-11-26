<?php

require_once __DIR__ . '/../../vendor/autoload.php';

$connection = new PDO('mysql:host=' . env('DB_HOST') . ';dbname=' . env('DB_DATABASE') . ';charset=utf8', env('DB_USERNAME'), env('DB_PASSWORD'));
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);