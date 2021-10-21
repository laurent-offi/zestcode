<div class="container">



    <?php if (isset($_SESSION['information']['edit_article'])) { ?>

        <div class="success"><i class="fa fa-check"></i>

            <?php echo $_SESSION['information']['edit_article']; ?>


        </div>

    <?php

        unset($_SESSION['information']['edit_article']);
    } ?>



    <div class="form">

        <form method="post">

            <a href="/backend/edit/<?= $article['id']; ?>"><i class="fas fa-arrow-circle-left"></i> Retour</a>
            <div class="informations">Souhaitez-vous vraiment supprimer cet article ?</div>

            <button name="delete" type="submit"><i class="fas fa-trash-alt"></i> Confirmer la suppression</button>


        </form>
    </div>
</div>