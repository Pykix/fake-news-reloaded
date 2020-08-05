<?php
require_once 'variables.php';
require_once 'functions.php';

var_dump($_POST);
if (isset($_POST['title'])) {
    if (!empty($_POST['title'])) {

        $q_insert_article = "INSERT INTO `posts` SET `date_creation` = ?, `title` = ?, `chapo` = ?, `content` = ?, `image` = ?";
        $stmt_insert_article = mysqli_prepare($db_cnx, $q_insert_article);
        if ($stmt_insert_article) {

            $title = $_POST['title'];
            $path = '../asset/image/';
            $img = $_FILES['image']['name'];
            $pathImage = $path . $img;
            move_uploaded_file($_FILES['image']['tmp_name'], $pathImage);
            $date = !empty($_POST['date']) ? $_POST['date'] : '2099-01-01 00:00:00';
            $chapo = !empty($_POST['chapo']) ? $_POST['chapo'] : ' ';
            $content = !empty($_POST['content']) ? $_POST['content'] : ' ';
            $image = !empty($_POST['image']) ? $_POST['image'] : ' ';

            mysqli_stmt_bind_param($stmt_insert_article, 'sssss', $date, $title, $chapo, $content, $pathImage);
            mysqli_stmt_execute($stmt_insert_article);
            mysqli_stmt_close($stmt_insert_article);

        }
        header('Location: /articles.php');
    }
}
