<?php

require_once 'libs/variables.php';
include_once 'libs/functions.php';

$id = '';
$title = '';
if (isset($_GET['id'])) {
    $title = $_GET['title'];
    $id = $_GET['id'];
}
$page = $title . ' | Fake News II';

require 'inc/header.php';
require_once 'inc/navbar.php';


var_dump($id);

foreach (displayUniqueArticle($db_cnx, $id) as $elt): ?>
    <h3><?php echo $elt['title'] ?></h3>
    <article>
        <p><?php echo $elt['date_creation'] ?></p>
        <img src="<?php echo $elt['image'] ?>" alt="image">
        <p><?php echo $elt['chapo'] ?></p>
        <p><?php echo $elt['content'] ?></p>
    </article>



<?php endforeach; ?>


<?php
require 'inc/footer.php';