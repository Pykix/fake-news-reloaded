<?php
require_once 'libs/variables.php';
require_once 'libs/functions.php';
$page = 'Settings | ' . $_SESSION['user']['login'];

require_once 'inc/header.php';
require_once 'inc/adminnavbar.php';

?>
<div class="container">
<h1>Reglages</h1>
    <form action="settings.php" method="post">
        <label for="indexSubtitle" class="form-label">Sous titre de la page principale</label>
        <input type="text" name="indexSubtitle" id="indexSubtitle" class="form-control">

        <label for="trucentocSubtitle" class="form-label">Sous titre de la page trucs en toc</label>
        <input type="text" name="trucsentocSubtitle" id="trucentocSubtitle" class="form-control">
    <button type="submit" class="mt-3 w-25">Modifier</button>
    </form>
</div>

<?php
require_once 'inc/adminfooter.php';
?>
