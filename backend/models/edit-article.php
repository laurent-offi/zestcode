<?php

    $update_article = $DB->prepare("UPDATE posts SET post_title = ?, post_description = ? WHERE post_id = ?");
    $update_article ->execute(array($article_title, $article_message, $article['id']));

        