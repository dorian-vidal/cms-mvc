<?php
// Config
$bdd_name = "davy_cms";
$bdd_host = "db";
$bdd_user = "root";
$bdd_password = "example";

// BDD
function connect_database_davy($bdd_name, $bdd_host, $bdd_user, $bdd_password) {
    $bdd_mysql = 'mysql:host=' . $bdd_host . ';dbname=' . $bdd_name . ';charset=utf8';
    $pdo_object = new PDO($bdd_mysql, $bdd_user, $bdd_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    
    return $pdo_object;
}

// PDO
$pdo_object = connect_database_davy($bdd_name, $bdd_host, $bdd_user, $bdd_password);

// Déconnexion
if (isset($_POST['deconnexion'])) {
    unset($_SESSION["membre"]);
    header("Location:" . URL . "/connexion");
}

// OUVERTURE SESSION
// session_start();

// VOIR SESSION
// echo '<pre>'; print_r($_SESSION); echo '</pre>';
?>