<?php
session_start();

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'fakenewsreloaded');


$connected = isset($_SESSION['user']);

$db_cnx = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

mysqli_set_charset($db_cnx, "utf8");

