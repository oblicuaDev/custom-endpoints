<?php
header('Content-Type: application/json');
include '../includes/config.php';
$content = file_get_contents('php://input');
$content2 = json_decode($content);

$zone = "";
if(isset($_GET['zone']))
{
    $zone = $_GET['zone'];
}


$result = $b->simplequery("https://bogotadc.travel/es/g/filterPortal/?filter=1&para=&subproduct=163,162,161,160,159,157,156,155,154,84,78,77,76,14,11&zone=".$zone."&closeto=".$_GET['closeto']);
echo json_encode($result);


?>