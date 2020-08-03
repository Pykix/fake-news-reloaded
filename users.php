<?php

require_once 'libs/variables.php';
require_once 'libs/functions.php';

$page = 'Users | ' . $_SESSION['user']['login'];

require_once 'inc/header.php';
require_once 'inc/adminnavbar.php';

?>
<div class="container">
    <div class="row">
        <?php foreach (displayUsers($db_cnx) as $user): ?>
        <div class="col-auto">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $user['login'] ?></h5>
                    <p class="card-text">Role : <?php echo $user['role'] == 0 ? 'Administrateur' : 'Journaliste' ?></p>
                    <a href="modificateUser.php?id=<?php echo $user['id'] ?>" class="btn btn-warning">Modifier</a>
                    <a href="libs/deleteUser.php?del&id=<?php echo $user['id'] ?>" class="btn btn-danger" id="">Supprimer</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <button class="btn btn-success mt-3"><a href="addUser.php" class="text-white">Ajouter un utilisateur</a></button>
</div>


<?php
require_once 'inc/adminfooter.php';