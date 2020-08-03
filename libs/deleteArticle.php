<?php

require_once 'variables.php';
require_once 'functions.php';


if( !isset( $_GET['del'] ) || !isset( $_GET['id']) || !$connected ) {
    header( 'Location: /' );
    exit();
}

$q_article_delete = 'DELETE FROM `posts` WHERE `id` = ?';
$stmt_article_delete = mysqli_prepare( $db_cnx, $q_article_delete );
if( $stmt_article_delete ) {
    $article_id = $_GET['id'];

    mysqli_stmt_bind_param( $stmt_article_delete, 'i', $article_id);

    mysqli_stmt_execute( $stmt_article_delete );

    mysqli_stmt_close( $stmt_article_delete );
    header('Location: /articles.php');
    exit();
}

