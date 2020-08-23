<?php
require_once 'libs/variables.php';
require_once 'libs/functions.php';
$page = 'Settings | ' . $_SESSION['user']['login'];

notConnected($connected);

require_once 'inc/header.php';
require_once 'inc/adminnavbar.php';


if (isset($_POST['indexSubtitle']) || isset($_POST['trucsentocSubtitle'])) {
    if (!empty($_POST['indexSubtitle'])) {
        modificateSubtitle($db_cnx, $_POST['indexSubtitle'], 'index');
    }
    if (!empty($_POST['trucsentocSubtitle'])) {
        modificateSubtitle($db_cnx, $_POST['trucsentocSubtitle'], 'toc');
    }
}


?>
<div class="background-admin">
    <div class="container">
        <h1>Reglages</h1>
        <form action="settings.php" method="post">
            <label for="indexSubtitle" class="form-label">Sous titre de la page principale</label>
            <input type="text" name="indexSubtitle" id="indexSubtitle" class="form-control">

            <label for="trucsentocSubtitle" class="form-label">Sous titre de la page trucs en toc</label>
            <input type="text" name="trucsentocSubtitle" id="trucsentocSubtitle" class="form-control">
            <button type="submit" class="mt-3 w-25 btn btn-success">Modifier</button>
        </form>
    </div>
</div>
<?php
require_once 'inc/adminfooter.php';
?>