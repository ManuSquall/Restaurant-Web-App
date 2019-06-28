<?php

session_start();

if(isset($_POST['submit'])){
    extract($_POST);


    for ($i=0; $i < count($_SESSION['commandes']) ; $i++) { 
        if ($_SESSION['commandes'][$i]['id'] == explode("-",$squall)[0]){
            $_SESSION['commandes'][$i]['qte'] = $quantite;
            $_SESSION['commandes'][$i]['total'] = $total;
            break;
            // echo $quantite;
            // echo $total;
        }
    }

    // foreach ($_SESSION['commandes'] as $c) {
    //     if ($c['id'] == explode("-",$squall)[0]){
    //         $c['qte']= $quantite;
    //         $c['total']= $total;
    //     }
    // }

    

    // $_SESSION['commandes'][$cpt]['id'] = explode("-",$idProduit)[0];
    // $_SESSION['commandes'][$cpt]['prix'] = explode("-",$idProduit)[1];
    // $_SESSION['commandes'][$cpt]['qte'] = $quantite;
    // $_SESSION['commandes'][$cpt]['libelle'] = $libelle;
    // $_SESSION['commandes'][$cpt]['total'] = $total;


    header('location:index.php');

}



?>