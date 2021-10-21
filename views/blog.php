<?php

if($number_posts < 1) { ?>

<div class="no-post">Il n'y a aucun article pour le moment</div>

<?php 

} else { 

while ($posts = $all_posts->fetch()) {

    $post['id'] = strip_tags(trim($posts['post_id']));
    $post['title'] = utf8_encode(strip_tags(trim($posts['post_title'])));
    $post['content'] = nl2br(utf8_encode(strip_tags(trim($posts['post_description']))));
    $post['creation'] = strip_tags(trim($posts['post_creation']));

?>
    <tr>
        <td class="settings"><?= $post['id']; ?></td>
        <td><?= $post['title']; ?></td>
        <td><?php $parser->parse($post['content']); 
            echo $parser->getAsHtml();?></td>
        <td><b>Le</b> <?= dateToFrench($post['creation'], 'l j F Y' . ' <b>à</b>' . ' H:i'); ?></td>
        <br>
    </tr>

<?php } } ?>
