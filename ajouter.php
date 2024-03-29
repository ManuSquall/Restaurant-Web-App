<?php
session_start();


require_once "functions/index.function.php";

$produits=getProduits();

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

        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">

                <h5 class="display-5">Order Food Item  </h5>
<hr>
<form method="post" action="panier.php" >
    <input name="libelle" id="libelle" type="hidden">
    <div class="form-group">
        <label> Produit</label>
        <select id="produit" name="idProduit" class="form-control" >
          <option value="0">-Select-</option>
          <?php foreach ($produits as $p) { ?>
            <option value="<?=$p['id_produit'].'-'.$p['prix']?>" > <?=$p['libelle']?> </option>
          <?php } ?>
        </select>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Prix</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                </div>
                <input id="prix" name="prix" class="form-control" readonly>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label>Quantité</label>
            <input id="quantite" min="1" name="quantite" type="number" class="form-control" >
        </div>
    </div>
    <div class="form-group">
        <label>Total</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">$</div>
            </div>
            <input id="total" name="total" class="form-control" readonly>
        </div>
    </div>
    <div class="form-group">
        <button name="submit" id="submit" type="submit" class="btn btn-primary"> Ajouter</button>
        <a href="index.php" ><button type="button" class="btn btn-outline-warning ml-2"> Retour</button></a>
    </div>
</form>
</div>
            </div>  
        </div>

    </div>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/myScript.js"></script>


</body>
</html>