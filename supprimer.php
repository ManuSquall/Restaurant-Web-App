<?php
session_start();
    if ($_GET['idSup']){
        $tab = [];
        foreach ($_SESSION['commandes'] as $c){
            if ($c['id'] != $_GET['idSup']){
                $tab[] = $c;
            }
        }
        $_SESSION['commandes'] = $tab;
        header('location:index.php');
    }