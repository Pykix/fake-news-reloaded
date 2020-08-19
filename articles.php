<?php
require_once 'libs/variables.php';
require_once 'libs/functions.php';

$page = 'Articles | ' . $_SESSION['user']['login'];
notConnected($connected);

require_once 'inc/header.php';
require_once 'inc/adminnavbar.php';

?>
<div class="background-admin">
    <div class="container">
        <div class="row justify-content-around justify-content-lg-start mx-auto">
            <?php if (isset($db_cnx)) {
                foreach (displayArticles($db_cnx, '100') as $article) : ?>
                    <div class="col-auto card bg-light mt-5 ml-lg-2">
                        <div class="card-header"><?php echo $article['title'] ?></div>
                        <div class="card-body">
                            <p class="card-text"><?php echo dateFormat($article['date_creation']); ?></p>
                            <a href="modificateArticles.php?id=<?php echo $article['id'] ?>" class="btn btn-warning">Modifier</a>
                            <a href="libs/deleteArticle.php?del&id=<?php echo $article['id'] ?>" class="btn btn-danger" id="">Supprimer</a>
                        </div>
                    </div>
            <?php endforeach;
            } ?>
        </div>
        <a href="addArticle.php" class="text-white btn btn-success mt-3 ml-5">Ajouter un article</a>
    </div>
</div>
<?php

require 'inc/adminfooter.php';

?>