<div class="container">

    <a class="add-post" href="add-post">Ajouter un article</a>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Date de création</th>
                <th>Gestion</th>
            </tr>
        </thead>

        <tbody>

            <?php

            if($number_posts < 1) { ?>

            <div class="no-post">Il n'y a aucun article pour le moment</div>

            <?php 
            
            } else { 

            while ($posts = $all_posts->fetch()) {

                $post['id'] = strip_tags(trim($posts['post_id']));
                $post['title'] = utf8_encode(strip_tags(trim($posts['post_title'])));
                $post['content'] = utf8_encode(strip_tags(trim($posts['post_description'])));
                $post['creation'] = strip_tags(trim($posts['post_creation']));

            ?>
                <tr>
                    <td class="settings"><?= $post['id']; ?></td>
                    <td><?= $post['title']; ?></td>
                    <td><b>Le</b> <?= dateToFrench($post['creation'], 'l j F Y' . ' <b>à</b>' . ' H:i'); ?></td>
                    <td class="settings"><i onclick="javascript:window.location.href='/backend/edit/<?=  $post['id']; ?>'" class="fas fa-cog fa-spin"></i></td>
                </tr>

            <?php } } ?>

        </tbody>
    </table>
</div>

