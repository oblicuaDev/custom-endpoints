<?php
header('Content-Type: application/json');
include '../includes/config.php';
$content = file_get_contents('php://input');
$content2 = json_decode($content);

$result = $b->sendNotification($content2->emailto);

echo json_encode($result);

?>