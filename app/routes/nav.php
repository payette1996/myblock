<?php
require_once '../app/models/Nav.php';
require_once '../app/controllers/NavController.php';

$json = file_get_contents('php://input');
$data = json_decode($json, true);

$type = (string) $data["type"];
$auth = (bool) $data["auth"];

$nav = (object) NavController::generateNav($type, $auth);

$json_pages = NavController::getJsonNav($nav);

header('Content-Type: application/json');
echo json_encode($json_pages);
?>