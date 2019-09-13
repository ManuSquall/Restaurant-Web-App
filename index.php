<?php

session_start();


include_once "connexion/connexion.php";
include_once "functions/index.function.php";

$clients = getClients();
// ////////////
$commandes= [];
$somme = 0;
$numero="";
if( isset($_SESSION['commandes'])){
    $commandes = $_SESSION['commandes'];
    foreach ($_SESSION['commandes'] as $c) {
        $somme = $somme + $c['total'];
    }
    $d=intval(dernierid()[0])+1;
    $numero = 'CMD-'.date("dmY",time()).'-'.$d;
}

//##################################################

// generation du numero

//echo $somme;


// var_dump($_SESSION['commandes']);
// ////////////


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
                <!-- #form="ngForm" autocomplet="off" *ngIf="service.formData" (submit)="onSubmit(form)" -->
                    <form method="post" action="enregistrer.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Numero de commande</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">#</div>
                                        </div>
                                        <input value="<?= $numero ?>" name="numero" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Client</label>
                                    <select name="idClient" class="form-control">
                                        <option value="0">-Selectionner un client-</option>
                                        <?php foreach($clients as $c){?>
                                            <option value="<?=$c['id_client']?>"><?=$c['nomComplet']?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Methode de paiement</label>
                                    <select name="paiement" class="form-control">
                                        <option value="0">-Mode de paiement-</option>
                                        <option value="espece">Espèce</option>
                                        <option value="carte">Carte</option>
                                        <option value="om">Orange Money</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Total</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">F CFA</div>
                                        </div>
                                        <input value="<?= $somme ?>" name="total" class="form-control" readonly>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <table class="table table-borderless">
                            <thead class="thead-light">
                                <th>Produit</th>
                                <th>Prix</th>
                                <th>Quantité</th>
                                <th>Total</th>
                                <th>
                                    <a href="ajouter.php" class="btn btn-sm btn-warning text-white"><i class="fa fa-plus"></i> Ajouter </a>
                                </th>
                            </thead>
                            <tbody>
                                        <!-- A afficher si aucun produit n'est selectionné -->
                                <?php if($somme==0) { ?>
                                    <tr >
                                    <td class="font-italic text-center" colspan="5">
                                        Pas de produit sélectionné pour cette commande!
                                    </td>
                                    </tr>
                                <?php } ?>
                                            <?php foreach ($commandes as $c) { ?>
                                                <tr >      
                                                <td> <?=$c['libelle']?> </td>
                                                <td> <?=$c['prix']?> </td>
                                                <td> <?=$c['qte']?> </td>
                                                <td> <?=$c['total']?> </td>
                                                <td>
                                                    <a href="editer.php?idEdit=<?=$c['id']?>" class="btn btn-sm btn-info text-white squall"><i class="fa fa-edit"></i>Editer</a>
                                                    <a href="supprimer.php?idSup=<?=$c['id']?>" class="btn btn-sm btn-danger text-white ml-2"><i class="fa fa-trash"></i>Supprimer</a>
                                                </td>
                                                </tr>
                                            <?php } ?>
                                
                            </tbody>
                        </table>
                        <hr>

                        <div class="form-group">
                            <button name="save" type="submit" class="btn btn-dark" disabled>
                                <i class="fa fa-database"></i>
                                Enregistrer
                            </button>
                            <a href="details.php" class="btn btn-outline-success ml-1"><i class="fa fa-table"></i> Détails commandes</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/index.js"></script>

</body>

</html>