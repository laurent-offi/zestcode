<?php

$page = "Suppression de l'article";

if (isset($url[2])) {
    if (preg_match("/([0-9])/mi", $url[2])) {

        require_once($patch_root . "/backend/models/search-article.php");

        if ($exist) {

            if (isset($_SESSION['id'])) {

                if (isset($_POST) && !empty($_POST)) {
                    extract($_POST);
                    $valid = true;

                    if (isset($_POST['delete'])) {

                        if ($valid) {
                            require_once($patch_root . "/backend/models/delete-article.php");
                            header("Location: /backend/blog");
                            exit();
                        }
                    }
                }
            }
            include "backend/views/delete.php";
        } else {
            include($patch_root . "404.php");
        }
    }
}
