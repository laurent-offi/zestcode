<?php

if(isset($url[2])) {
    $get_id = $url[2];
    $articles_infos = $DB->prepare("SELECT * FROM posts WHERE post_id = ?");
    $articles_infos->execute(array($get_id));
    $articles_info = $articles_infos->fetch();

    $exist = $articles_infos->rowCount();
    $articles_infos->execute();

    if($exist) {
        $article['id'] = trim($articles_info['post_id']);
        $article['title'] = utf8_encode(strip_tags(trim($articles_info['post_title'])));
        $article['content'] = utf8_encode(strip_tags(trim($articles_info['post_description'])));
    }

}
