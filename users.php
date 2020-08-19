<?php

require_once 'libs/variables.php';
require_once 'libs/functions.php';

$page = 'Users | ' . $_SESSION['user']['login'];



notConnected($connected);


// Si l'user est un admin alors il accede a la page de gestion des users
if ($_SESSION['user']['role'] != 0) {
    header('Location: /homeadmin.php');
}

require_once 'inc/header.php';
require_once 'inc/adminnavbar.php';

?>
    <div class="background-admin">
        <div class="container">
            <a href="addUser.php" class="text-white btn btn-success mt-3">Ajouter un utilisateur</a>
            <div class="container mt-3 border rounded shadow">
            <div class="row justify-content-around justify-content-lg-start my-2 mx-auto">

                <?php foreach (displayUsers($db_cnx) as $user): ?>

                    <div class="border-bottom my-2 ml-lg-2">
                        <div class="d-flex align-items-baseline">
                            <div class="test flex-grow-1">
                                <h5 class=" user"><?php echo $user['login'] ?></h5>
                                <p class="text-left">
                                    <?php echo $user['role'] == 0 ? 'Administrateur' : 'Journaliste' ?> <!-- Ternaire pour afficher si l'user est un admin ou un journalist-->
                                </p>
                            </div>
                            <div class="test">
                                <!-- On fait passer l'id dans le lien pour recup les info dans la modif d'user-->
                                <a href="modificateUser.php?id=<?php echo $user['id'] ?>" class="btn btn-warning">Modifier</a>
                                <!-- On fait passer l'id dans le lien pour recup les infos et supprimer l'user-->
                                <a href="libs/deleteUser.php?del&id=<?php echo $user['id'] ?>" class="btn btn-danger" id="">Supprimer</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
        </div>
    </div>

<?php
require_once 'inc/adminfooter.php';