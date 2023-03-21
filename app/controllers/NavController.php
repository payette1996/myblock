<?php
require_once "./app/models/Nav.php";

class NavController {

    public static function generateNav($type, $auth)
    {
        if (!$auth) {
            switch ($type) {
                case "index":
                    $pages = ["Register", "Login"];
                    break;
                default:
                    throw new InvalidArgumentException("$type is not a valid type");
            }
        }

        return new Nav($pages);
    }

    public static function getJsonNav(Nav $nav)
    {
        return json_encode($nav->getPages());
    }
}
?>