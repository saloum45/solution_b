<?php
    // require("/xampp/htdocs/solution_b/function/function.php");
    if(isset($_GET['test'])&&isset($_GET['id_client'])){
        $test=$_GET['test'];
        $id_client=$_GET['id_client'];
        if($test==1){
            
            $sql="DELETE FROM `client` WHERE id_client=$id_client";
            delete($sql);
            header("location:?affichage=listerClient&msg=suppression faite avec succès ");
        }
    }else if(isset($_GET['test'])&&isset($_GET['id_payement'])){
        $test=$_GET['test'];
        $id_payement=$_GET['id_payement'];
        if($test==2){
            
            $sql="DELETE FROM `payement` WHERE num_p=$id_payement";
            delete($sql);
            header("location:?affichage=listerPayement&msg=suppression faite avec succès ");
        }
    }else if(isset($_GET['test'])&&isset($_GET['id_Facture'])){
        $test=$_GET['test'];
        $id_Facture=$_GET['id_Facture'];
        if($test==3){
            
            $sql="DELETE FROM `facture` WHERE num_f=$id_Facture";
            delete($sql);
            header("location:?affichage=listerFacture&msg=suppression faite avec succès ");
        }
    }else if(isset($_GET['test'])&&isset($_GET['id_bonfacture'])){
        $test=$_GET['test'];
        $id_bonfacture=$_GET['id_bonfacture'];
        if($test==4){
            
            $sql="DELETE FROM `bf` WHERE id_bf=$id_bonfacture";
            delete($sql);
            header("location:?affichage=listerBonFacture&msg=suppression faite avec succès ");
        }
    }else if(isset($_GET['test'])&&isset($_GET['id_commande'])){
        $test=$_GET['test'];
        $id_commande=$_GET['id_commande'];
        if($test==5){
            
            $sql="DELETE FROM `commande` WHERE id_commande=$id_commande";
            delete($sql);
            header("location:?affichage=listerCommande&msg=suppression faite avec succès ");
        }
    }else if(isset($_GET['test'])&&isset($_GET['id_lettre'])){
        $test=$_GET['test'];
        $id_lettre=$_GET['id_lettre'];
        if($test==6){
            
            $sql="DELETE FROM `lettre` WHERE num_lettre=$id_lettre";
            delete($sql);
            header("location:?affichage=listerLettre&msg=suppression faite avec succès ");
        }
    }else if(isset($_GET['test'])&&isset($_GET['id_lignecommande'])){
        $test=$_GET['test'];
        $id_lignecommande=$_GET['id_lignecommande'];
        if($test==7){
            
            $sql="DELETE FROM `ligne_commande` WHERE id_ligne=$id_lignecommande";
            delete($sql);
            header("location:?affichage=listerLigneCommande&msg=suppression faite avec succès ");
        }
    }