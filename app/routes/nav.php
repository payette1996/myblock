<?php
require_once "../controllers/NavController.php";
require_once "../models/Nav.php";

$json = file_get_contents('php://input');
$data = json_decode($json, true);

$type = (string) $data["type"];
$auth = (bool) $data["auth"];

$nav = (object) NavController::generateNav($type, $auth);

$json_pages = NavController::getJsonNav($nav);

header('Content-Type: application/json');
echo $json_pages;
?>