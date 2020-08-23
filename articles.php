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
        <a href="addArticle.php" class="text-white btn btn-success mt-3">Ajouter un article</a>
        <div class="container mt-3 border rounded shadow">
        <div class="row justify-content-around justify-content-lg-start my-2 mx-auto">

            <?php if (isset($db_cnx)) { // si la connexion a la base de donnée est bonne on recupère chaque articles dans la bdd
                foreach (displayArticles($db_cnx, '100') as $article): ?>

                    <div class="border-bottom my-2 ml-lg-2">
                        <div class="d-flex align-items-baseline">
                        <div class="flex-grow-1">

                            <?php echo $article['title'] ?>

                            <p class="text-left">
                                <?php echo dateFormat($article['date_creation']); ?>
                            </p>

                        </div>
                        <div class="">
                            <!-- On fait passer l'id dans le lien pour pouvoir le recupéré apres pour la page detailsarticle -->
                            <a href="modificateArticles.php?id=<?php echo $article['id'] ?>" class="btn btn-warning">Modifier</a>
                            <a href="libs/deleteArticle.php?del&id=<?php echo $article['id'] ?>" class="btn btn-danger" id="">Supprimer</a>
                        </div>
                    </div>
                    </div>

                <?php endforeach;
            } ?>

        </div>
    </div>
    </div>
</div>
<?php

require 'inc/adminfooter.php';
?>