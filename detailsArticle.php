<?php

require_once 'libs/variables.php';
include_once 'libs/functions.php';

// Initialisation des variables à vide
$id = '';
$title = '';

// si il y a post on assigne les valeur du get aux variables declaré
if (isset($_GET['id'])) {
    $title = $_GET['title'];
    $id = $_GET['id'];
} else {
    header("Location: /");
}

$page = $title . ' | Fake News II';

require 'inc/header.php';
require_once 'inc/navbar.php';

?>

<div id="details">
<div class="container">

<!--On affiche le detail de l'article grace a l'id recupéré -->
<?php foreach (displayUniqueArticle($db_cnx, $id) as $elt): ?>

    <h3><?php echo $elt['title'] ?></h3>

    <div class="separator"></div>
    <div class="separator"></div>

    <article class="text-center">

        <p id="date">
            <?php
            echo dateFormat($elt['date_creation']); // Recuperation de la date
            ?>
        </p>

        <img src="<?php echo $elt['image'] ?>" class="img-article" alt="image">
        <p class="text-left"><?php echo $elt['chapo'] ?></p>
        <p class="text-left"><?php echo $elt['content'] ?></p>

    </article>

<?php endforeach; ?>

</div>
</div>

<?php
require 'inc/footer.php';