<?php
header('Content-Type: application/json');
// Load html content by default
$html = file_get_contents('templates/hotel-template/index.html');
//$html = file_get_contents('templates/magazine-template/index.html');
//$html = file_get_contents('templates/profile-template/index.html');

$content = [
    "html"          => $html,
    "css"           => null,
    "components"    => null,
    "style"         => null,
];

echo json_encode($content);
?>