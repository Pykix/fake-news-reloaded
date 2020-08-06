<?php
$page = 'Accueil - Fake News II';
require_once 'libs/variables.php';
include_once 'libs/functions.php';
require 'inc/header.php';
require_once 'inc/navbar.php';


if (isset($_SERVER['REMOTE_ADDR'])) {
    $ip = $_SERVER['REMOTE_ADDR'];
}

?>
    <div class="container text-center">
        <div class="separator"></div>
        <div class="separator"></div>
        <section class="last-news">
            <h1>Les dernieres news</h1>
            <div class="last-news d-flex flex-md-row flex-md-wrap align-items-start justify-content-md-around ">

                <?php if (isset($db_cnx)) {

                    foreach (displayArticles($db_cnx, '3') as $article): ?>

                        <article class="col-md-6 col-lg-4 align-items-stretch mt-lg-0 mx-auto">

                            <a class="index" href="trucsentoc.php#<?php echo $article['id'] ?>">
                            <img class="img-article"  src="<?php echo $article['image'] ?>" alt="img"/>
                            <p id="date" class="mt-lg-5"><?php echo dateFormat($article['date_creation']); ?></p>
                            <h2><?php echo $article['title'] ?></h2>
                            <p>
                                <?php echo $article['chapo'] ?>
                            </p>
                            </a>

                        </article>

                    <?php endforeach;

                } ?>

            </div>

                <a href="trucsentoc.php" class="more"><i class="fas fa-file"></i> J'en veux encore !</a>

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




<?php
require 'inc/footer.php';
