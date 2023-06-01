<?php
header('Content-Type: application/json');
include '../includes/config.php';
$closetoArray = explode(',', $_GET['closeto']);
$closetoArray[0] = floatval($closetoArray[0]);
$closetoArray[1] = floatval($closetoArray[1]);

//print_r($closetoArray);
$product = "";
if(isset($_GET['subproduct'])){
    $product = explode(",",$_GET['subproduct']);
}
$result = $b->events($product, isset($_GET['closeto']) ? $closetoArray : false);

echo json_encode($result);
?>