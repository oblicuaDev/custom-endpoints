<?php
header('Content-Type: application/json');
include '../includes/config.php';
$content = file_get_contents('php://input');
$content2 = json_decode($content);


$result = $b->removeSavedPlace($content2->user,$content2->place);
echo json_encode(array("message"=>"ok"));


?>