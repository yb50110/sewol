<?php
// >>>>>> NOTE: deprecated. using laravel controllers now




//
//include(__DIR__.'/connect.php');
//
//$message = $_GET['message_id'];
//
//$stmt = $connection->prepare("
//    SELECT
//        `text` as `text`
//    FROM
//        `messages`
//    WHERE
//        `id` = ?;");
//
//if(!$stmt->execute(array($message))){
//    throw new RuntimeException("Query failed to get patient information.");
//}
//
//$row  = $stmt -> fetch();
//
//echo json_encode($row);