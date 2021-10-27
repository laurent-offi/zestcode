<?php

    $delete_post = $DB->prepare("DELETE FROM posts WHERE post_id = ?");
    $delete_post->execute(array($article['id']));
