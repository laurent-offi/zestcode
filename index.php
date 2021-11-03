<?php


if (!isset($_SESSION)) {
    session_start();
}

$regex = "/^([a-zA-Z0-9-]+)$/i";

$url = "";

$patch_root = $_SERVER['DOCUMENT_ROOT'] . "/";

require_once($patch_root . "apps/db.php");
require_once($patch_root . "controllers/functions/timeago_function.php");

$pagearticles = 10;


if (isset($_GET["url"])) {
    $url = explode("/", $_GET["url"]);
}

if (!isset($url[1]) && $url != "backend") {
    require_once($patch_root . "views/templates/header_view.php");
}
// On défini la variable url qui sert à savoir quel lien va être traîté par le routeur.

if ($url == "") {
    require $patch_root . "controllers/home.php";

    if (file_exists("controllers/title_controller.php")) {
        include_once("controllers/title_controller.php");
    }

} else if (isset($url[0]) && file_exists("controllers/" . $url[0] . ".php")) {

    require $patch_root . "controllers/" . $url[0] . ".php";

    if (file_exists("controllers/title_controller.php")) {
        include_once("controllers/title_controller.php");
    }

} else if (isset($url[0]) && $url[0] == "backend") {
    require $patch_root . $url[0] . "/index.php";

    if (file_exists("controllers/title_controller.php")) {
        include_once("controllers/title_controller.php");
    }

} else {
    require $patch_root . "404.php";
    if (file_exists("controllers/title_controller.php")) {
        include_once("controllers/title_controller.php");
    }
}

if (!isset($url[1]) && $url != "backend") {
    require_once($patch_root . "views/templates/footer_view.php");
}