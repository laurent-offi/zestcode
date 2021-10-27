<?php

    require_once($patch_root . "/backend/controllers/JBBCode/Parser.php");
    
$page = "Edition de l'article";

if (isset($url[2])) {
    if (preg_match("/([0-9])/mi", $url[2])) {

        require_once($patch_root . "/backend/models/search-article.php");

        if ($exist) {
            
            if (isset($_SESSION['id'])) {

                if (isset($_POST) && !empty($_POST)) {
                    extract($_POST);
                    $valid = true;

                    if (isset($_POST['edit'])) {

                        $article_title  = utf8_decode(strip_tags(trim($_POST['title'])));
                        $article_message = utf8_decode(strip_tags(trim(nl2br($_POST['content']))));

                        if (!empty($article_title) && !empty($article_message)) {

                            if (strlen($article_title) < 3) {
                                $valid = false;
                                $error['article_title'] = "Le titre de l'article est trop petit.";
                            } else if (strlen($article_title) > 50) {
                                $valid = false;
                                $error['article_title'] = "Le titre de l'article est trop grand.";
                            }

                            if (strlen($article_message) < 3) {
                                $valid = false;
                                $error['article_content'] = "Le contenu de l'article est trop court.";
                            } else if (strlen($article_message) > 2600) {
                                $valid = false;
                                $error['article_content'] = "Le contenu de l'article est trop long.";
                            }

                            if ($valid) {
                                require_once($patch_root . "/backend/models/edit-article.php");
                                $_SESSION['information']['edit_article'] = "Votre article a été mis à jour avec succès.";
                                header('Location: /backend/edit/' . $article['hash']);
                                    exit();
                            }
                        } else {
                            $valid = false;
                            $error['empty_field'] = "Veuillez remplir les deux champs.";
                        }
                    }
                }

                include "backend/views/edit.php";
            } else {
                include($patch_root . "404.php");
            }
            
        } else {
            include($patch_root . "404.php");
        }
    }
} else {
    include($patch_root . "404.php");
}


