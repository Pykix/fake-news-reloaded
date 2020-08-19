<?php
require_once 'variables.php';

// recuperation des info du form de connexion pour verifier l'existence de celle ci,
// si elle existe l'utilisateur sera connecté avec les information correspondant a son profil et accedera au backend


if (!isset($_POST['login']) || !isset($_POST['password'])) {
    header('Location: ../connexion.php');
}

$q_auth = 'SELECT `id`, `login`, `role` FROM users WHERE `login` = ? AND `password` = ?'; //preparation de la requete

$stmt_auth = mysqli_prepare($db_cnx, $q_auth);

if (!$stmt_auth) {

    var_dump('Error' . $q_auth);

} else {

    $form_login = $_POST['login'];
    $form_password = hash('sha512', $_POST['password']);

    mysqli_stmt_bind_param($stmt_auth, 'ss', $form_login, $form_password);
    mysqli_stmt_execute($stmt_auth);
    $r_auth = mysqli_stmt_get_result($stmt_auth);
    mysqli_stmt_close($stmt_auth);

    if (mysqli_num_rows($r_auth) > 0) {

        $_SESSION['user'] = mysqli_fetch_assoc($r_auth);
        header('Location: /homeadmin.php');
        exit();

    }
    else {

        $_SESSION['error_cnx'] = 'Utilisateur ou mot de passe incorrect'; // Si erreur de login ou de mdp un message d'erreur apparait
        header('Location: ../connexion.php');

    }
}