<?php

$all_posts = $DB->prepare("SELECT * FROM posts WHERE post_id  ORDER BY post_id DESC LIMIT ".$start." , ".$pagearticles."");
$all_posts->execute();
$number_posts = $all_posts->rowCount();
