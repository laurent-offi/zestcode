<?php

if ($number_posts < 1) { ?>

    <div class="no-post">Il n'y a aucun article pour le moment</div>

    <?php

} else {

    while ($posts = $all_posts->fetch()) {

        $post['id'] = strip_tags(trim($posts['post_id']));
        $post['title'] = utf8_encode(strip_tags(trim($posts['post_title'])));
        $post['content'] = nl2br(utf8_encode(strip_tags(trim($posts['post_description']))));
        $post['creation'] = strip_tags(trim($posts['post_creation']));



    ?>
        <div class="blog">
        
            <div class="blog-container">
        
        
                <div class="post">
        
                    <div class="post-image"><img src="public/images/blog-image.jpg" alt="Image du blog"></div>
        
                    <div class="post-container">
        
                        <div class="post-header">
        
                            <div class="post-title"><?= $post['title']; ?></div>
                            <div class="post-date"><?php echo "Il y a <b>" . TimeAgo($post['creation'], date("Y-m-d H:i:s")) . "</b>" ?></div>
        
                        </div>
        
                        <div class="post-description"><?php $parser->parse($post['content']);
                echo $parser->getAsHtml(); ?></div>
        
                    </div>
                </div>
        
        
            </div>
        
        
        </div>
<?php }
} ?>