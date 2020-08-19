<?php
require_once 'variables.php';

/** Affiche les articles
 * @param $db_cnx
 * @param $limit
 * @return array
 */
function displayArticles($db_cnx, $limit)
{
    $q_articles = 'SELECT * FROM `posts`  ORDER BY `date_creation`  DESC  LIMIT ' . $limit;
    $articles = [];
    $r_articles = mysqli_query($db_cnx, $q_articles);
    if (!$r_articles) {
        echo 'Un probleme de connexion est survenu';
    } else {
        while ($article = mysqli_fetch_assoc($r_articles)) {
            $articles[] = $article;
        }
        return $articles;
    }
}

/** Affiche les users
 * @param $db_cnx
 * @return array
 */
function displayUsers($db_cnx)
{
    $q_users = 'SELECT `id`, `login`, `role` FROM `users`';
    $users = [];
    $r_users = mysqli_query($db_cnx, $q_users);
    if (!$r_users) {
        echo 'Un probleme de connexion est survenu';
    } else {
        while ($user = mysqli_fetch_assoc($r_users)) {
            $users[] = $user;
        }
        return $users;
    }
}


/** Affiche les users suivant condition
 * @param $db_cnx
 * @param $id
 * @return array
 */
function displayUniqueUsers($db_cnx, $id)
{
    $q_users = 'SELECT `id`, `login`, `role` FROM `users` WHERE `id` =' . $id;
    $users = [];
    $r_users = mysqli_query($db_cnx, $q_users);
    if (!$r_users) {
        echo 'Un probleme de connexion est survenu';
    } else {
        while ($user = mysqli_fetch_assoc($r_users)) {
            $users[] = $user;
        }
        return $users;
    }
}


/** Affiche les articles suivant condition
 * @param $db_cnx
 * @param $id
 * @return array
 */
function displayUniqueArticle($db_cnx, $id)
{
    $q_articles = 'SELECT * FROM `posts` WHERE `id` =' . $id;
    $articles = [];
    $r_articles = mysqli_query($db_cnx, $q_articles);
    if (!$r_articles) {
        echo 'Un probleme de connexion est survenu';
    } else {
        while ($article = mysqli_fetch_assoc($r_articles)) {
            $articles[] = $article;
        }
        return $articles;
    }
}


/** Affiche les sous titres des pages
 * @param $db_cnx
 * @param $page
 * @return array|mixed|string
 */
function displaySubtitle($db_cnx, $page)
{
    $q_title = "SELECT `value` FROM `settings` WHERE `name` LIKE '%" . $page . "'";
    $title = [];
    $r_title = mysqli_query($db_cnx, $q_title);
    if (!$r_title) {
        echo 'Un probleme de connexion est survenu';
    } else {
        $res = mysqli_fetch_assoc($r_title);
        $title = $res['value'];
    }

    return $title;

}

/** Modification des sous titre des pages
 * @param $db_cnx
 * @param $value
 * @param $name
 */
function modificateSubtitle($db_cnx, $value, $name)
{
    $q_modificate = "UPDATE `settings` SET `value` = '" . $value . "'" . " WHERE `name` LIKE '%" . $name . "'";

    mysqli_query($db_cnx, $q_modificate);
}

/** Compte le nombre d'id dans une table
 * @param $db_cnx
 * @param $table
 * @return int|mixed|string
 */
function countThings($db_cnx, $table)
{
    $q_users_count = 'SELECT COUNT(`id`) as `total` FROM ' . $table;
    $r_users_count = mysqli_query($db_cnx, $q_users_count);
    $users_count = 0;
    if ($r_users_count) {
        $r_users_count_row = mysqli_fetch_assoc($r_users_count);
        $users_count = $r_users_count_row['total'];
    }
    return $users_count;
}

/** Formate la date
 * @param $date
 * @return false|string
 */
function dateFormat($date){
    $sec = strtotime($date);
    return date("d/m/Y H:i", $sec);
}

/** Verification si user connecté
 * @param $connected
 */
function notConnected ($connected) {
    if (!$connected) {
        header('Location: /');
    }
}