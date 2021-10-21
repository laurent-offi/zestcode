<?php

if (!isset($_SESSION)) {
    session_start();
}

$url = "";
$patch_root = $_SERVER['DOCUMENT_ROOT'] . "/";
$assets_url = "/backend/assets/";

$regex = "/^([a-zA-Z0-9-]+)$/i";

require_once($patch_root . "apps/db.php");
require_once($patch_root . "backend/controllers/functions/date_function.php");


if (isset($_SESSION['id'])) {

    if (isset($_GET["url"])) {
        $url = explode("/", $_GET["url"]);
    }

    require_once $patch_root . "/backend/views/bases/header_view.php";

    if ($url == "") {
        require $patch_root . "backend/controllers/dashboard.php";

        if (file_exists("controllers/title.php")) {
            include_once("controllers/title.php");
        }
    } else if (isset($url[0]) && isset($url[1]) && $url[0] == "backend" && file_exists($patch_root . $url[0] . "/"  . "controllers/" . $url[1] . ".php")) {
        require $patch_root . $url[0] . "/"  . "controllers/" . $url[1] . ".php";
    } else {
        require $patch_root . "404.php";
    }
} else {
    require_once "controllers/auth.php";
}

require_once $patch_root . "/backend/views/bases/footer_view.php";
