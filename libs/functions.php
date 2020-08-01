<?php
require_once 'variables.php';


function displayArticles ($db_cnx) {
    $q_articles = 'SELECT * FROM `posts`';
    $articles = [];
    $r_articles = mysqli_query($db_cnx, $q_articles);
    if (!$r_articles) {
        echo 'Un probleme de connexion';
    } else {
        while ($article = mysqli_fetch_assoc( $r_articles )) {
            $articles[] = $article;
        }
        return $articles;
    }
}


