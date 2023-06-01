<?php
header('Content-Type: application/json');
include '../includes/config.php';
$content = file_get_contents('php://input');
$content2 = json_decode($content);


$result = $b->rateplace($content2->place,$content2->rate,$content2->type);
echo json_encode($result);


?>