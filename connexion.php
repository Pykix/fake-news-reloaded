<?php
$page = 'Connexion - Fake News II';
require_once 'libs/variables.php';
require_once 'libs/functions.php';
require 'inc/header.php';
require_once 'inc/navbar.php';

$has_error = isset($_SESSION['error_cnx']);
$error_msg = $has_error ? $_SESSION['error_cnx'] : '';
unset($_SESSION['error_cnx']);


?>
    <div class="container">
        <div class="content">
            <div class="title text-center">
                <h3>Nous Sachons !</h3>
                <h2>connexion</h2>
            </div>
            <?php if ($has_error): ?>
                <div class="error_msg text-center"><?php echo $error_msg ?></div>
            <?php endif; ?>


            <form method="post" action="libs/auth.php" class="w-25 mx-auto mb-5">
                <div class="mb-3">
                    <label for="login" class="form-label">Login</label>
                    <input type="text" name="login" class="form-control" id="login" aria-describedby="login">

                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-success">Connexion</button>
            </form>
        </div>
    </div>

<?php
require 'inc/footer.php';
