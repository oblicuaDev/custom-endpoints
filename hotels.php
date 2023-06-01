<?php
header('Content-Type: application/json');
include '../includes/config.php';
$closetoArray = explode(',', $_GET['closeto']);
$closetoArray[0] = floatval($closetoArray[0]);
$closetoArray[1] = floatval($closetoArray[1]);

//print_r($closetoArray);
$zone = "";
if(isset($_GET['zone'])){
    $zone = explode(",",$_GET['zone']);
}
$result = $b->hotels($zone, isset($_GET['closeto']) ? $closetoArray : false);

echo json_encode($result);
?>