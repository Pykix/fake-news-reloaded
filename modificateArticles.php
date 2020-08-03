<?php
require_once 'libs/variables.php';
require_once 'libs/functions.php';

$page = 'Modification articles | ' . $_SESSION['user']['login'];

require_once 'inc/header.php';
require_once 'inc/adminnavbar.php';


if (isset($_GET['id'])) {
    $_SESSION['id'] = $_GET['id'];
}


if (isset($_POST['title'])) {
    if (!empty($_POST['title'])) {

        $q_modify_article = "UPDATE `posts` SET `date_creation` = ?, `title` = ?,  `chapo` = ?, `content` = ? WHERE `id` = ?";
        $stmt_modify_article = mysqli_prepare($db_cnx, $q_modify_article);
        if ($stmt_modify_article) {
            $id = $_SESSION['id'];
            $title = $_POST['title'];
            $date = !empty($_POST['date']) ? $_POST['date'] : '2099-01-01 00:00:00';
            $chapo = !empty($_POST['chapo']) ? $_POST['chapo'] : ' ' ;
            $content = !empty($_POST['content']) ? $_POST['content'] : ' ' ;
            mysqli_stmt_bind_param($stmt_modify_article, 'ssssi', $date,$title,  $chapo, $content, $id);
            mysqli_stmt_execute($stmt_modify_article);
            mysqli_stmt_close($stmt_modify_article);
            header('Location: /articles.php');
        } else {
            header('Location: /articles.php');
            echo 'Erreur de modification';
        }
    }
}


?>
    <div class="container">
        <?php

        var_dump($_SESSION['id']);
        var_dump($_POST['title']);
        var_dump($_POST['date']);
        var_dump($_POST['chapo']);
        var_dump($_POST);


        ?>
        <?php foreach (displayUniqueArticle($db_cnx, $_SESSION['id']) as $elt): ?>
            <p>titre : <?php echo $elt['title'] ?></p>
            <p>date : <?php echo $elt['date_creation'] ?></p>
            <p>chapô : <?php echo $elt['chapo'] ?></p>
            <p>contenu : <?php echo $elt['content'] ?></p>
            <p>image : <img src="<?php echo $elt['image'] ?>" alt=""></p>

        <?php endforeach; ?>

        <form method="post" action="modificateArticles.php">
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
            <button type="submit" class="btn btn-success">Modifier</button>
        </form>

    </div>

<?php
require_once 'inc/adminfooter.php';
