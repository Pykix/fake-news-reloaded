<?php
require_once 'libs/variables.php';
require_once 'libs/functions.php';
$page = 'Ajouter un article | ' . $_SESSION['user']['login'];
notConnected($connected);
require_once 'inc/header.php';
require_once 'inc/adminnavbar.php';

?>
<div class="container">
    <form method="post" action="libs/addArticle.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" class="form-control" id="title">

        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="text" name="date" class="form-control" id="date" placeholder=" ex : 2020-08-13 02:08">
        </div>
        <div class="mb-3">
            <label for="chapo" class="form-label">Chapô</label>
            <textarea class="form-control" id="chapo" name="chapo" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>
        <div class="form-file">
            <input type="file" class="form-file-input" name="image" id="image">
            <label class="form-file-label" for="image">
                <span class="form-file-text">Choose file...</span>
                <span class="form-file-button">Browse</span>
            </label>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>

</div>
<?php require_once 'inc/adminfooter.php';
