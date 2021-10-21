<div class="container">

    <div class="form">

        <a href="/backend/blog"><i class="fas fa-arrow-circle-left"></i> Retour</a>
        <form method="post">


            <?php if (isset($error['empty_field'])) {
                echo "<li>" . $error['empty_field'] . " </li>";
            } ?>


            <span>Titre de l'article</span>
            <input type="text" name="title" value="<?php if(isset($article_title)) { echo $article_title; } ?>">

            <?php if (isset($error['title'])) {
                echo "<li>" . $error['title'] . " </li>";
            } ?>


            <span>Description de l'article</span>
            <textarea id="wysibb" name="content"><?php if(isset($article_message)) { echo $article_message; } ?></textarea>

            <?php if (isset($error['content'])) {
                echo "<li>" . $error['content'] . " </li>";
            } ?>


            <button name="publish" type="submit">Publier l'article</button>


        </form>
    </div>
</div>