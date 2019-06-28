<?php

session_start();

if(isset($_POST['submit'])){
    extract($_POST);

    $cpt = count($_SESSION['commandes']);

    $_SESSION['commandes'][$cpt]['id'] = explode("-",$idProduit)[0];
    $_SESSION['commandes'][$cpt]['prix'] = explode("-",$idProduit)[1];
    $_SESSION['commandes'][$cpt]['qte'] = $quantite;
    $_SESSION['commandes'][$cpt]['libelle'] = $libelle;
    $_SESSION['commandes'][$cpt]['total'] = $total;


    header('location:ajouter.php');

}



?>