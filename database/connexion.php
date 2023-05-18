<?php
    $DNS="mysql:host=localhost;dbname=BD_STOCK_UAHB;";
    $USER="root";
    $PASS="";
    try {
        $conn=new PDO($DNS,$USER,$PASS);
    } catch (Exception $ex) {
        echo"erreur de connexion ".$ex->getMessage();
    }