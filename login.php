<?php
header('Content-Type: application/json');
include '../includes/config.php';
$content = file_get_contents('php://input');
$content2 = json_decode($content);



$result = $b->login($content2->email,$content2->password);
echo json_encode($result);


?>