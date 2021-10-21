<div class="container">



    <?php if (isset($_SESSION['information']['edit_article'])) { ?>

        <div class="success"><i class="fa fa-check"></i>

            <?php echo $_SESSION['information']['edit_article']; ?>


        </div>

    <?php

        unset($_SESSION['information']['edit_article']);
    } ?>



    <div class="form">

    <a href="/backend/blog"><i class="fas fa-arrow-circle-left"></i> Retour</a>

        <form method="post">
            
            <div class="delete">
                <span data-tooltip="Cliquer ici pour supprimer l'article" data-flow="top">
                    <a href="/backend/delete/<?= $article['id'] ?>"><i name="delete" class="fas fa-trash-alt"></i></a>
                </span>
            </div>


            <?php if (isset($error['empty_field'])) {
                echo "<li>" . $error['empty_field'] . " </li>";
            } ?>


            <span>Titre de l'article</span>
            <input type="text" name="title" value="<?= $article['title']; ?>">

            <?php if (isset($error['title'])) {
                echo "<li>" . $error['title'] . " </li>";
            } ?>


            <span>Description de l'article</span>
            <textarea id="wysibb" name="content"><?php if (isset($article['content'])) {
                                            echo $article['content'];
                                        } else {
                                            echo $article_title;
                                        } ?></textarea>

            <?php if (isset($error['content'])) {
                echo "<li>" . $error['content'] . " </li>";
            } ?>


            <button name="edit" type="submit">Modifier l'article</button>


        </form>
    </div>
</div>