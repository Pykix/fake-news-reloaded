<?php
require_once 'libs/variables.php';
?>
<div class="admin">
<nav class="navigation">
    <ul>
        <li>
            <a href="/homeadmin.php">
                <i class="fas fa-home icon"></i>
                <span class="title">Accueil</span>
            </a>
        </li>
        <li>
            <a href="/settings.php">
                <i class="fas fa-cog icon"></i>
                <span class="title">Reglages</span>
            </a>
        </li>
        <!-- Si l'user n'est pas admin il ne vera pas la onglet user-->
        <?php if ($_SESSION['user']['role'] == 0): ?>
        <li>
            <a href="/users.php">
                <i class="fas fa-users-cog icon"></i>
                <span class="title">Utilisateurs</span>
            </a>
        </li>
        <?php endif; ?>
        <li>
            <a href="articles.php">
                <i class="far fa-newspaper icon"></i>
                <span class="title">Articles</span>
            </a>
        </li>
        <li>
            <a href="libs/logout.php">
                <i class="fas fa-sign-out-alt icon"></i>
                <span class="title">Deconnexion</span>
            </a>
        </li>
    </ul>
</nav>
    <div class="toggle"></div>
</div>