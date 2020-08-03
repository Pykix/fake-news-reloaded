<?php
$page = 'Accueil - Fake News II';
require_once 'libs/variables.php';
require 'inc/header.php';
require_once 'inc/navbar.php';
include_once 'libs/functions.php';
// TODO Enlever le var_dump
var_dump($_SESSION['user']);
?>
    <div class="container text-center">
        <div class="separator"></div>
        <div class="separator"></div>
        <section class="last-news">

            <h1><?php echo displaySubtitle($db_cnx, 'index')  ?></h1>
            <div class="last-news d-flex flex-md-row flex-md-wrap align-items-start flex-lg-nowrap justify-content-md-center ">
                <?php if (isset($db_cnx)) {
                    foreach (displayArticles($db_cnx) as $article): ?>
                        <article class="col-md-6 col-lg-4 align-items-stretch mt-lg-0">
                            <a href="#">
                            <img src="<?php echo $article['image'] ?>" alt="img"/>
                            <p id="date" class="mt-lg-5"><?php echo $article['date_creation'] ?></p>
                            <h2><?php echo $article['title'] ?></h2>
                            <p>
                                <?php echo $article['chapo'] ?>
                            </p>
                            </a>
                        </article>
                    <?php endforeach;
                } ?>
            </div>
            <button class="more">
                <a href="trucsentoc.php"><i class="fas fa-file"></i> J'en veux encore !</a>
            </button>
        </section>
    </div>

    <div class="separator"></div>

    <div class="citation">
        <img src="asset/image/banner.jpg" alt=""/>
        <div class="text-block">
            <p>
                "On peut tromper <span class="bold">une</span> fois
                <span class="bold">mille</span> personnes,<br/>
                mais on ne peut pas tromper <span class="bold">mille</span> fois
                <span class="bold">une</span> personne."
            </p>
            <p><span class="italic">- éMILE</span></p>
        </div>
    </div>

    <div class="separator"></div>


<?php
require 'inc/footer.php';
