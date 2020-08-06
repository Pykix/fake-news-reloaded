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
?>
<div id="details">
<div class="container">
<?php foreach (displayUniqueArticle($db_cnx, $id) as $elt): ?>
    <h3><?php echo $elt['title'] ?></h3>
    <div class="separator"></div>
    <div class="separator"></div>
    <article class="text-center">
        <p id="date">
            <?php
            $dateFormat = $elt['date_creation'];
            $sec = strtotime($dateFormat);
            $newDate = date("d/m/Y H:i", $sec);
            echo $newDate;
            ?>
        </p>
        <img src="<?php echo $elt['image'] ?>" class="img-article" alt="image">
        <p class="text-left"><?php echo $elt['chapo'] ?></p>
        <p class="text-left"><?php echo $elt['content'] ?></p>
    </article>

<?php endforeach; ?>
</div>
</div>
<?php
require 'inc/footer.php';