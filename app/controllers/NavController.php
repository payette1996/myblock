<?php
require_once "../models/Nav.php";

class NavController {
    public static function generateNav($type, $auth) : Nav
    {
        if (!$auth) {
            switch ($type) {
                case "index":
                    $pages = ["Register", "Login"];
                    return new Nav($pages);
                default:
                    throw new InvalidArgumentException("$type is not a valid type");
            }
        }
    }

    public static function getJsonNav(Nav $nav) : string
    {
        return json_encode($nav->getPages());
    }
}
?>