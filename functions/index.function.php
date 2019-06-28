<?php

require_once "connexion/connexion.php";

function getClients(){

    global $db;

    $sql= "SELECT * FROM client";

    return $db->query($sql)->fetchAll();
}

function getProduits(){
//* retourne l'ensemble des produits qui sont dans la bd
    global $db;

    $sql="SELECT * FROM produit ORDER BY libelle";

    return $db->query($sql)->fetchAll();
}

function dernierid(){
    global $db;

    $sql = "select count(numero) from commande";
    return $db->query($sql)->fetch();
}

function getcommandes(){

    global $db;

    $sql = "select * from commande";
    return $db->query($sql)->fetchAll();

}

function getnbrprod($a){

    global $db;

    $sql="select count(*) from produitcommande where id_commande = ".$a;

    return $db->query($sql)->fetch();
}

function getcommandebyid($a){

    global $db;
    $sql= "select * from commande where id_commande = ".$a;
    return $db->query($sql)->fetch();
}




?>