<?php
header('Content-Type: application/json');
include '../includes/config.php';
$content = file_get_contents('php://input');
$content2 = json_decode($content);
//echo $content2->user;


$result = $b->deleteUser($content2->user);
echo json_encode(array("message"=>"ok"));


?>