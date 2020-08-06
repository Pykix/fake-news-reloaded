<?php
require_once 'libs/variables.php';
require_once 'libs/functions.php';

$page = 'Modification utilisateurs | ' . $_SESSION['user']['login'];

notConnected($connected);

require_once 'inc/header.php';
require_once 'inc/adminnavbar.php';


if (isset($_GET['id'])) {
    $_SESSION['id'] = $_GET['id'];
}

if (isset($_POST['login'])) {
    if (!empty($_POST['login'])) {
        $role = null;
        if (isset($_POST['administrateur']) && $_POST['administrateur'] == 'on') {
            $role = 0;
        } else {
            $role = 1;
        }

        $q_modify_user = "UPDATE `users` SET `login` = ?, `role` = ? WHERE `id` = ?";
        $stmt_modify_user = mysqli_prepare($db_cnx, $q_modify_user);
        if ($stmt_modify_user) {
            $id = $_SESSION['id'];
            $login = $_POST['login'];
            mysqli_stmt_bind_param($stmt_modify_user, 'sii', $login, $role, $id);
            mysqli_stmt_execute($stmt_modify_user);
            mysqli_stmt_close($stmt_modify_user);
            header('Location: /users.php');
        } else {
            echo 'Erreur de modification';
        }
    }
}


?>
    <div class="container">

        <?php foreach (displayUniqueUsers($db_cnx, $_SESSION['id']) as $elt): ?>
            <p>login : <?php echo $elt['login'] ?></p>
            <p>role : <?php echo $elt['role'] == 0 ? 'Administrateur' : 'Journaliste' ?></p>
        <?php endforeach; ?>

        <form method="post" action="modificateUser.php">
            <div class="mb-3">
                <label for="login" class="form-label">Login</label>
                <input type="text" name="login" class="form-control" id="login" aria-describedby="login">

            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" name="administrateur" type="checkbox" id="administrateur">
                <label class="form-check-label" for="administrateur">Administrateur</label>
            </div>
            <button type="submit" class="btn btn-success">Modifier</button>
        </form>

    </div>

<?php
require_once 'inc/adminfooter.php';