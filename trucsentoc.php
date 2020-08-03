<?php
$page = 'Trucs en Toc - Fake News II';
require_once 'libs/variables.php';
require_once 'libs/functions.php';
require_once 'inc/header.php';
require_once 'inc/navbar.php';





?>
<div class="container">
    <div class="separator"></div>
    <div class="separator"></div>
    <section class="last-news">
        <h1><?php echo displaySubtitle($db_cnx, 'toc')?></h1>
        <div class="">
            <?php if (isset($db_cnx)) {
            foreach (displayArticles($db_cnx) as $article): ?>
            <article class="articles-link">

                    <div class="text-left">
                    <p id="date" class="mt-lg-5"><?php echo $article['date_creation'] ?></p>
                    <h2><?php echo $article['title'] ?></h2>
                    </div>
                    <div class="d-md-flex flex-md-row">
                        <img src="<?php echo $article['image'] ?>" class="float-left float-md-none mr-2 mb-1" id="img-article" alt="img"/>
                        <p class="text-left">
                            <?php echo $article['chapo'] ?>
                        </p>
                    </div>


        <button class="btnLink">
            <a href="trucsentoc.php"><i class="fas fa-file"></i> J'en veux encore !</a>
        </button>
        </article>
        <?php endforeach;
        } ?>
</div>

</section>
</div>


<?php
require 'inc/footer.php';

?>
