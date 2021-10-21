<?php

    $new_article = $DB->prepare("INSERT INTO posts(post_title, post_description) VALUES(?, ?)");
    $new_article ->execute(array($article_title, $article_message));