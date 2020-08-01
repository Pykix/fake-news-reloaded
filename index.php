<?php
$page = 'Accueil - Fake News II';
require 'inc/header.php';
include_once 'libs/functions.php';

?>
<section class="last-news">
    <h1>les dernieres <strong>fake news</strong>!</h1>
    <div class="last-news-container">
        <?php foreach (displayArticles($db_cnx) as $article): ?>
        <article>
            <img src="<?php echo $article['image']?>" alt="" />
            <p><?php echo $article['date_creation'] ?></p>
            <h2><?php echo $article['title']?></h2>
            <p>
                <?php echo $article['chapo']?>
            </p>
        </article>
        <?php endforeach; ?>
</section>






<?php
require 'inc/footer.php';
