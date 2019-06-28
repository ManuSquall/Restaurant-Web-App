<?php
session_start();


require_once "functions/index.function.php";

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

                <h5 class="display-5">Commands list </h5>
<hr>
<!-- ############################# -->


<table class="table table-borderless">
                            <thead class="thead-light">
                                <th>Numéro</th>
                                <th>Date</th>
                                <th>Nombre de produits</th>
                                <th>Montant Total</th>
                                <th>Détails</th>
                            </thead>
                            <tbody>
                                        <!-- A afficher si aucun produit n'est selectionné -->
                                <?php if(count($listecommandes)==0) { ?>
                                    <tr >
                                    <td class="font-italic text-center" colspan="5">
                                        Vous n'avez pas encore enregistré de commandes!
                                    </td>
                                    </tr>
                                <?php } ?>
                                            <?php foreach ($listecommandes as $c) { 
                                                
                                                //generer la date
                                                $date= substr($c['numero'], 4,8);
                                                $date = substr($date, 0,2)."-".substr($date, 2,2)."-".substr($date, 4,4);
                                                
                                                $nbr = getnbrprod($c['id_commande'])[0];
                                                
                                                ?>
                                                <tr >
                                                <td> <?=$c['numero']?> </td>
                                                <td> <?=$date?> </td>
                                                <td> <?=$nbr?> </td>
                                                <td> <?=$c['total']?> </td>
                                                <td>
                                                    <a href="detailprod.php?idCom=<?=$c['id_commande']?>" class="btn btn-sm btn-info text-white squall"><i class="fa fa-edit"></i>Détails</a>
                                                </td>
                                                </tr>
                                            <?php } ?>
                                
                            </tbody>
                        </table>

<hr>



                        <div class="form-group">
        <a href="index.php" ><button type="button" class="btn btn-outline-dark ml-2"> Retour</button></a>
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