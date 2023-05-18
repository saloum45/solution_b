<?php
    if(isset($_GET['id_commande'])){
        $id_commande=$_GET['id_commande'];
        $sql="SELECT * FROM `commande` WHERE id_commande='".$id_commande."'";
        $affichage_commandes=select($sql);
    }
    if(isset($_POST['submit'])){
        extract($_POST);
        if(!empty($designation) && !empty($bf) && !empty($facture)){
            // require("/xampp/htdocs/solution_b/function/function.php");
            $sql="UPDATE `commande` SET `designation_c`='$designation',`id_bf`='$bf',`num_f`='$facture' WHERE id_commande='".$id_commande."'";
            update($sql);
           header("location:?affichage=listerCommande&msg=modification faite avec succès ");
        }else {
            header("location:?affichage=modifierCommande&msg=vauillez saisir des informations correctes ");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'une commande</title>
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha1-dist/style.css">
</head>
<body>
    <div class="form_index">
        <form action="" method="post">
            <?php
               
                message();
            ?>
            <legend>Ajout d'une commande</legend>
            <?php foreach($affichage_commandes as $affichage_commande):?>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">DESIGNATION</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir la designation" name="designation" value="<?=$affichage_commande['designation_c']?>">
                </div>
            <?php endforeach?>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">bon fabrication</label>
                <select name="bf" id="bf" class="form-select" aria-label="Default select example">
                    <?php
                        $sql="SELECT * FROM `bf`";
                        $affichages_bfs=select($sql);
                    ?>
                    <?php foreach($affichages_bfs as $affichages_bf):?>
                        <option value="<?=$affichages_bf['id_bf']?>"><?=$affichages_bf['nom_bf']?></option>
                    <?php endforeach?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">facture</label>
                <select name="facture" id="facture" class="form-select" aria-label="Default select example">
                    <?php
                        $sql="SELECT * FROM `facture`";
                        $affichages_factures=select($sql);
                    ?>
                    <?php foreach($affichages_factures as $affichages_facture):?>
                        <option value="<?=$affichages_facture['num_f']?>"><?=$affichages_facture['designation']?></option>
                    <?php endforeach?>
                </select>
            </div>
            <div class="mb-3 btn-connexion">
                <input type="submit" class="form-control" id="exampleFormControlInput1" value="modifier" name="submit">
            </div> 
            
        </form>
        
    </div>
    
</body>
<script src="../../bootstrap-5.3.0-alpha1-dist/js/bootstrap.js"></script>
</html>