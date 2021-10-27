<?php


    require_once($patch_root . "/backend/controllers/JBBCode/Parser.php");


if (isset($_SESSION['id'])) {

    $page = "Ajouter un article";

    if (isset($_POST) && !empty($_POST)) {
        extract($_POST);
        $valid = true;

        if (isset($_POST['publish'])) {

            $article_title = utf8_decode(strip_tags(trim($_POST['title'])));
            $article_message = utf8_decode(strip_tags(trim(nl2br($_POST['content']))));

            if (!empty($article_title) && !empty($article_message)) {

                if (strlen($article_title) < 3) {
                    $valid = false;
                    $error['title'] = "Le titre de l'article est trop petit.";
                } else if (strlen($article_title) > 50) {
                    $valid = false;
                    $error['title'] = "Le titre de l'article est trop grand.";
                }

                if (strlen($article_message) < 3) {
                    $valid = false;
                    $error['content'] = "Le contenu de l'article est trop court.";
                } else if (strlen($article_message) > 2600) {
                    $valid = false;
                    $error['content'] = "Le contenu de l'article est trop long.";
                }

                if ($valid) {

                    $message_date = date("Y-m-d H:i:s");
                    $post_hash = uniqid(rand(1000, 9999999));
                    require($patch_root . "backend/models/add-post.php");
                    $_SESSION['information']['article_status'] = "Votre article a été publié avec succès.";
                    header('Location: /backend/blog');
                    exit();
                }
            } else {
                $valid = false;
                $error['empty_field'] = "Veuillez remplir les deux champs.";
            }
        }
    }


    include "backend/views/add-post.php";

} else {
    header("Location: /backend/");
}
