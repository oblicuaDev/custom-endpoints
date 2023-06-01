<?php
header('Content-Type: application/json');
include '../includes/config.php';
$closetoArray = explode(',', $_GET['closeto']);
$closetoArray[0] = floatval($closetoArray[0]);
$closetoArray[1] = floatval($closetoArray[1]);

//print_r($closetoArray);
$plans = "";
$zone = "";
$subproducts = "";
if(isset($_GET['plans'])){
    $plans = explode(",",$_GET['plans']);
}
if(isset($_GET['zone'])){
    $zone = explode(",",$_GET['zone']);
}
if(isset($_GET['subproducts'])){
    $subproducts = explode(",",$_GET['subproducts']);
}

$result = $b->places($plans,$subproducts,$zone, isset($_GET['closeto']) ? $closetoArray : false, 16, $_GET['page']);

echo json_encode($result);
?>