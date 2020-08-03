<?php

require_once 'variables.php';
require_once 'functions.php';


if( !isset( $_GET['del'] ) || !isset( $_GET['id']) || !$connected ) {
    header( 'Location: /' );
    exit();
}

$q_user_delete = 'DELETE FROM `users` WHERE `id` = ?';
$stmt_wish_delete = mysqli_prepare( $db_cnx, $q_user_delete );
if( $stmt_wish_delete ) {
    $user_id = $_GET['id'];

    mysqli_stmt_bind_param( $stmt_wish_delete, 'i', $user_id);

    mysqli_stmt_execute( $stmt_wish_delete );

    mysqli_stmt_close( $stmt_wish_delete );
    header('Location: /users.php');
    exit();
}