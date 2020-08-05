<?php
$page = 'Trucs en Toc - Fake News II';

require_once 'libs/variables.php';
require_once 'libs/functions.php';
require_once 'inc/header.php';
require_once 'inc/navbar.php';


?>
<div id="trucentoc">
    <div class="container">
        <section class="last-news">



            <div class="">
                <?php if (isset($db_cnx)) {
                    foreach (displayArticles($db_cnx, '100') as $article): ?>
                        <div class="separator"></div>
                        <article class="articles-link" id="<?php echo $article['id'] ?>">

                            <div class="justify-content-md-start">
                                <p id="date" class="mt-lg-5"><?php echo $article['date_creation'] ?></p>
                                <h2><?php echo $article['title'] ?></h2>
                            </div>
                            <div class="d-md-flex flex-md-row">
                                <img src="<?php echo $article['image'] ?>"
                                     class="float-left float-md-none mr-2 mb-1 img-article-toc" alt="img"/>
                                <p class="text-left">
                                    <?php echo $article['chapo'] ?>
                                </p>
                            </div>
                                <a href="detailsArticle.php?id=<?php echo $article['id'] ?>&title=<?php echo $article['title'] ?> " class="btnLink"><i
                                            class="fas fa-file"></i> J'en veux encore !</a>
                        </article>

                    <?php endforeach;
                } ?>
            </div>

        </section>
    </div>
</div>

<?php
require 'inc/footer.php';

?>
