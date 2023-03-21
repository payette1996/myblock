<?php
require_once "../controllers/NavController.php";

$url = $_SERVER["REQUEST_URI"];
$sections = explode("/", $url);
$action = end($sections);

if ($action === "links") {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    $type = (string) $data["type"];
    $auth = (bool) $data["auth"];

    $nav = (object) NavController::generateNav($type, $auth);

    $json_pages = NavController::getJsonNav($nav);

    http_response_code(200);
    header('Content-Type: application/json');
    echo $json_pages;
} else {
    http_response_code(400);
    header('Content-Type: text/plain');
    echo "400 Error";
}
?>