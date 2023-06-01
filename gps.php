<?php
$body = file_get_contents('php://input');
$content = json_decode($body);
print_r($content);
?>