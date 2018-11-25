<?php

include(__DIR__.'/connect.php');

$message = $_GET['message_id'];

$stmt = $connection->prepare("
    SELECT 
        `id` as `id`,
        `text` as `text`, 
        `created_at` as `created_as`
    FROM
        `messages`
    WHERE
        `id` = ?;");

if(!$stmt->execute(array($message))){
    throw new RuntimeException("Query failed to get patient information.");
}

$row  = $stmt -> fetch();

echo json_encode($row);