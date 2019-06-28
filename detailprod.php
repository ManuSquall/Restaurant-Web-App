<?php
session_start();


require_once "functions/index.function.php";

if ($_GET['idCom']){

    $squall=getcommandebyid($_GET['idCom']);
    // var_dump($squall);
    $produits=getproduitbyidcom($_GET['idCom']);
    //var_dump($produits);
}



$listecommandes=getcommandes();

// var_dump($listecommandes);
// echo count($listecommandes);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/squall.css">
    <title>Squall Gourmet</title>
</head>
<body>
<div class="jumbotron jumbotron-fluid">

        <h3 class="display-4 text-center">
        <img width="7%" src="assets/img/squall.ico" alt="">
        <span id="squalltitle">
            Squall Gourmet
            </span>
        </h3>
        <hr>

        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">


    <h5 class="display-5">Produits de la commande <?=$squall['numero']?> </h5>
<hr>
<!-- ############################# -->


<table class="table table-borderless">
                            <thead class="thead-light">
                                <th>Commande</th>
                                <th>Libelle</th>
                                <th>Quantite</th>
                                <th>Prix</th>
                            </thead>
                            <tbody>
                                        <!-- A afficher si aucun produit n'est selectionné -->
                                <?php if(count($produits)==0) { ?>
                                    <tr >
                                    <td class="font-italic text-center" colspan="4">
                                        Cette commande n'a pas de produits: c'est normalement impossible :-)!
                                    </td>
                                    </tr>
                                <?php } ?>
                                            <?php foreach ($produits as $c) { 
                                                
                                                
                                                ?>
                                                <tr >
                                                <td> <?=$squall['numero']?> </td>
                                                <td> <?=$c['libelle']?> </td>
                                                <td> <?=$c['quantite']?> </td>
                                                <td> <?=$c['prix']?> </td>
                                                
                                                </tr>
                                            <?php } ?>
                                
                            </tbody>
                        </table>

<hr>



                        <div class="form-group">
        <a href="details.php" ><button type="button" class="btn btn-outline-dark ml-2"> Retour</button></a>
    </div>

<!-- ############################# -->

</div>
            </div>
        </div>

    </div>
<script src="assets/js/jquery.js"></script>
<!-- <script src="assets/js/myScript.js"></script> -->


</body>
</html>