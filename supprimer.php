<?php

require_once "functions/index.function.php";


session_start();
    if ($_GET['idSup']){
        $tab = [];
        $trouve=0;
        foreach ($_SESSION['commandes'] as $c){
            if ($c['id'] != $_GET['idSup']){
                $tab[] = $c;
            }else{
                if($trouve==0){
                    $trouve=1;
                }else{
                    $tab[] = $c;
                }
            }
        }
        $_SESSION['commandes'] = $tab;
        header('location:index.php');
    }