<?php
require_once 'libs/variables.php';
require_once 'libs/functions.php';

$page = 'Ajouter un user | ' . $_SESSION['user']['login'];

notConnected($connected);

// Si l'user est un admin alors il accede a la page de gestion des users

if ($_SESSION['user']['role'] != 0) {
    header('Location: /homeadmin.php');
}

require_once 'inc/header.php';
require_once 'inc/adminnavbar.php';

?>

<div class="container">
    <form method="post" action="libs/addUser.php" class="w-25">
        <div class="my-3">
            <label for="login" class="form-label">Login</label>
            <input type="text" name="login" class="form-control" id="login" aria-describedby="login">

        </div>
        <div class="my-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="form-check form-switch my-3">
            <input class="form-check-input" name="administrateur" type="checkbox" id="administrateur">
            <label class="form-check-label" for="administrateur">Administrateur</label>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
</div>

<?php require_once 'inc/adminfooter.php';
