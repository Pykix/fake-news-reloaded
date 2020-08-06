<?php

require_once 'libs/variables.php';
require_once 'libs/functions.php';

$page = 'Acceuil | ' . $_SESSION['user']['login'];

notConnected($connected);


require_once 'inc/header.php';
require_once 'inc/adminnavbar.php';






?>
    <div class="background-admin">
    <div class="container">
        <h1>Nous sachons ! On sait qu'ils savent que nous savons qu'il savent qu'on sait</h1>

        <div class="card  bg-light mb-3 w-50">
            <div class="card-header">Nombres d'utilisateur</div>
            <div class="card-body">
                <p class="card-text "><?php echo countThings($db_cnx, 'users'); ?></p>
            </div>
        </div>
        <div class="card  bg-light mb-3 w-50">
            <div class="card-header">Nombres d'articles</div>
            <div class="card-body">
                <p class="card-text"><?php echo countThings($db_cnx, 'posts'); ?></p>
            </div>
        </div>

    </div>

    </div>
<?php
require_once 'inc/adminfooter.php';