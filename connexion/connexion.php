<?php
$host="localhost";
$db_name="restoapp";
$db_user="root";
$db_password="";



try {
    $db = new PDO('mysql:host='.$host.'; dbname='.$db_name, $db_user, $db_password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $ex) {
    die("Erreur lors de la connexion à la BD!".$ex->getMessage());
}



?>

