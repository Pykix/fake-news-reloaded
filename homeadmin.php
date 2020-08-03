<?php

require_once 'libs/variables.php';
require_once 'libs/functions.php';
$page = 'Acceuil | ' . $_SESSION['user']['login'];

require_once 'inc/header.php';
require_once 'inc/adminnavbar.php';


if (!isset($_SESSION['user'])) {
    header('Location: /');
    exit();
}




?>
    <div class="container">
        <h1>Nous sachons ! on sait qu'ils savent que nous savons qu'il savent qu'on sait</h1>

        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Nombres d'utilisateur</div>
            <div class="card-body">
                <p class="card-text"><?php echo countThings($db_cnx, 'users'); ?></p>
            </div>
        </div>
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Nombres d'articles</div>
            <div class="card-body">
                <p class="card-text"><?php echo countThings($db_cnx, 'posts'); ?></p>
            </div>
        </div>

    </div>


<?php
require_once 'inc/adminfooter.php';