<?php 

    $page = "Gestion du blog";
    $pagearticles = 10;

    $totalarticles =  $DB->prepare('SELECT post_id FROM posts');
    $totalarticles->execute();
    $totalarticles = $totalarticles->rowCount();
    $totalpages = ceil($totalarticles/$pagearticles);
    
    if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0 AND $_GET['page'] <= $totalpages) {
        $_GET['page'] = intval($_GET['page']);
        $currentpage = $_GET['page'];
    } else {
        $currentpage = 1;
    }
    $start = ($currentpage-1)*$pagearticles;
    
    require "backend/models/all_posts.php";
    include "backend/views/blog.php";