<?php
$page = 'Connexion - Fake News II';
require_once 'libs/variables.php';
require 'inc/header.php';
require_once 'inc/navbar.php';

$has_error = isset($_SESSION['error_cnx']);
$error_msg = $has_error ? $_SESSION['error_cnx'] : '';
unset($_SESSION['error_cnx']);


?>
    <h1>Nous Sachons !</h1>
    <h2>connexion</h2>

<?php if ($has_error): ?>
    <div class="error_msg"><?php echo $error_msg ?></div>
<?php endif; ?>

    <div class="container">
        <form method="post" action="libs/auth.php">
            <div class="mb-3">
                <label for="login" class="form-label">Login</label>
                <input type="text" name="login" class="form-control" id="login" aria-describedby="login">

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


<?php
require 'inc/footer.php';
