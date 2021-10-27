<?php

    $page = "Blog";

    require_once($patch_root . "controllers/JBBCode/Parser.php");

    $parser = new JBBCode\Parser();
    $parser->addCodeDefinitionSet(new JBBCode\DefaultCodeDefinitionSet());

    $parser->addBBCode("left", '<div align="left">{param}</div>');
    $parser->addBBCode("center", '<div align="center">{param}</div>');
    $parser->addBBCode("right", '<div align="right">{param}</div>');
    $parser->addBBCode("bulllist", '<li>{param}<li>');
    
    require_once($patch_root . "controllers/functions/date_function.php");

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


    require "models/all-posts.php";


    include $patch_root . "/views/blog.php";
