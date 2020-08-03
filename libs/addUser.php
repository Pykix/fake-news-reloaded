<?php
require_once 'variables.php';
require_once 'functions.php';


if (isset($_POST['login']) && isset($_POST['password'])) {
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $role = null;
        if ($_POST['administrateur'] ==  'on') {
            $role = 0;
        } else {
            $role = 1;
        }
        //. $_POST['login'] . "', '" . $_POST['password'] . "', '" . $role .
        $q_insert_user = "INSERT INTO `users` SET `login` = ?, `password` = ?, `role` = ?";
        $stmt_insert_user = mysqli_prepare($db_cnx, $q_insert_user);
        if ($stmt_insert_user) {
            $login = $_POST['login'];
            $password = hash('sha512', $_POST['password']);
            mysqli_stmt_bind_param($stmt_insert_user, 'ssi', $login, $password, $role);
            mysqli_stmt_execute($stmt_insert_user);
            mysqli_stmt_close($stmt_insert_user);
        }
        header('Location: /users.php');
    }
}