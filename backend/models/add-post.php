<?php

    $new_article = $DB->prepare("INSERT INTO posts(post_title, post_description, post_creation, post_hash) VALUES(?, ?, ?, ?)");
    $new_article ->execute(array($article_title, $article_message, $message_date, $post_hash));
        