<?php
require_once 'libs/variables.php';
require_once 'libs/functions.php';
$page = 'Ajouter un user | ' . $_SESSION['user']['login'];

require_once 'inc/header.php';
require_once 'inc/adminnavbar.php';

?>
    <div class="container">
        <form method="post" action="libs/addUser.php">
            <div class="mb-3">
                <label for="login" class="form-label">Login</label>
                <input type="text" name="login" class="form-control" id="login" aria-describedby="login">

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" name="administrateur" type="checkbox" id="administrateur">
                <label class="form-check-label" for="administrateur">Administrateur</label>
            </div>
            <button type="submit" class="btn btn-success">Ajouter</button>
        </form>
    </div>
<?php require_once 'inc/adminfooter.php';
