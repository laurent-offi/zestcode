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


    require "models/all-posts.php";


    include $patch_root . "/views/blog.php";
