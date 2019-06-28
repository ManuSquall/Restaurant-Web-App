<?php
session_start();

require_once  "connexion/connexion.php";

// function dernierid(){
//     global $db;

//     $sql = "select count(numero) from commande";
//     return $db->query($sql)->fetch();
// }

if (isset($_POST['save'])){

// enregistrement dans la table commande


    global $db;

   //$d=intval(dernierid()[0])+1;
   //echo $d;
    // var_dump($d);
    //$numero = 'CMD-'.date("dmY",time()).'-'.$d;
    $numero = $_POST['numero'];
    $client = $_POST['idClient'];
    $paiement = $_POST['paiement'];
    $total = $_POST['total'];
  /*  echo $numero;
    echo $client;
    echo $paiement;
    echo $total;
*/

    $sql= "insert into commande values(NULL,'".$numero."',".$client.",'".$paiement."',".$total."); ";
    //echo $sql;
    $db->prepare($sql)->execute();

//###########################################################################

function rechercher_id_commande_par_num($a){
    global $db;

    $sql="select id_commande from commande where numero='".$a."'";
    return $db->query($sql)->fetch();
}

// enregistrement dans la table produitcommande

foreach ($_SESSION['commandes'] as $c) {

    //$s="1".$c['id'].rechercher_id_commande_par_num($numero)[0].$c['qte'];

    $sql= "insert into produitcommande values(NULL,".$c['id'].",".intval(rechercher_id_commande_par_num($numero)[0]).",".$c['qte'].")";
    $db->prepare($sql)->execute();

}





    //Enregistrer la commande dans la base
    //supprimer la session commandes
    session_destroy();
   unset($_SESSION['commandes']);

   header('location:index.php');
}