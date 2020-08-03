<?php
require_once 'libs/variables.php';
require_once 'libs/functions.php';

$page = 'Articles | ' . $_SESSION['user']['login'];

require_once 'inc/header.php';
require_once 'inc/adminnavbar.php';

?>
<div class="container">
    <div class="row">
        <?php if (isset($db_cnx)) {
            foreach (displayArticles($db_cnx) as $article): ?>
                <div class="col-auto card text-white bg-primary mb-3">
                    <div class="card-header"><?php echo $article['title'] ?></div>
                    <div class="card-body">
                        <p class="card-text"><?php echo $article['date_creation'] ?></p>
                        <a href="modificateArticles.php?id=<?php echo $article['id'] ?>" class="btn btn-warning">Modifier</a>
                        <a href="libs/deleteArticle.php?del&id=<?php echo $article['id'] ?>" class="btn btn-danger" id="">Supprimer</a>
                    </div>
                </div>
            <?php endforeach;
        } ?>
    </div>
    <button class="btn btn-success mt-3"><a href="addArticle.php" class="text-white">Ajouter un article</a></button>
</div>

<?php

require 'inc/adminfooter.php';

?>
