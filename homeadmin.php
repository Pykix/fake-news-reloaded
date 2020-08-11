<?php

require_once 'libs/variables.php';
require_once 'libs/functions.php';

$page = 'Acceuil | ' . $_SESSION['user']['login'];

notConnected($connected);


require_once 'inc/header.php';
require_once 'inc/adminnavbar.php';


?>
    <div class="background-admin">
        <div id="homeadmin">
            <div class="container">

                <div class="row row-cols-1 row-cols-md-3 g-4 card-group">
                    <div class="col ">
                        <div class="card h-100">
                            <div class="card-header">Nombres d'utilisateur</div>
                            <div class="card-body">

                                <!-- Affiche le nombre d'user total du site -->
                                <p class="card-text "><?php echo countThings($db_cnx, 'users'); ?></p>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-header">Nombres d'articles</div>
                            <div class="card-body">
                                <!-- Affiche le nombre de articles du site -->
                                <p class="card-text"><?php echo countThings($db_cnx, 'posts'); ?></p>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-header">Visiteurs unique</div>
                            <div class="card-body">

                                <!-- Affiche le nombre de visite unique -->
                                <p class="card-text"><?php echo countThings($db_cnx, 'posts'); ?></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php
require_once 'inc/adminfooter.php';