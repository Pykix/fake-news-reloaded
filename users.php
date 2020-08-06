<?php

require_once 'libs/variables.php';
require_once 'libs/functions.php';

$page = 'Users | ' . $_SESSION['user']['login'];

notConnected($connected);

require_once 'inc/header.php';
require_once 'inc/adminnavbar.php';

?>
    <div class="background-admin">
        <div class="container">
            <div class="row justify-content-around justify-content-lg-start mx-auto">
                <?php foreach (displayUsers($db_cnx) as $user): ?>

                        <div class="card col-auto mt-5 ml-lg-2">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $user['login'] ?></h5>
                                <p class="card-text">Role
                                    : <?php echo $user['role'] == 0 ? 'Administrateur' : 'Journaliste' ?></p>
                                <a href="modificateUser.php?id=<?php echo $user['id'] ?>" class="btn btn-warning">Modifier</a>
                                <a href="libs/deleteUser.php?del&id=<?php echo $user['id'] ?>" class="btn btn-danger"
                                   id="">Supprimer</a>
                            </div>
                        </div>

                <?php endforeach; ?>
            </div>
            <button class="btn btn-success mt-3"><a href="addUser.php" class="text-white">Ajouter un utilisateur</a>
            </button>
        </div>
    </div>

<?php
require_once 'inc/adminfooter.php';