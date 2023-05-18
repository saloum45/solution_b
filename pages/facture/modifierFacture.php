<?php
    if(isset($_GET['id_Facture'])){
        $num_f=$_GET['id_Facture'];
        $sql="SELECT * FROM `facture` WHERE num_f='".$num_f."'";
        $affichage_Factures=select($sql);
    }
    if(isset($_POST['submit'])){
        extract($_POST);
        if(!empty($designation) && !empty($payement) && !empty($client)){
            // require("/xampp/htdocs/solution_b/function/function.php");
            $sql="UPDATE `facture` SET `designation`='$designation',`num_p`='$payement',`id_client`='$client' WHERE num_f='".$num_f."'";
            update($sql);
           header("location:?affichage=listerFacture&msg=modification faite avec succès ");
        }else {
            header("location:?affichage=ajouterFacture&msg=vauillez saisir des informations correctes ");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'une facture</title>
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha1-dist/style.css">
</head>
<body>
    <div class="form_index">
        <form action="" method="post">
            <?php
               
                message();
            ?>
            <legend>Modification</legend>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">DESIGNATION</label>
                <?php foreach($affichage_Factures as $affichages_Facture):?>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir la designation" name="designation" value="<?=$affichages_Facture['designation']?>">
                <?php endforeach?>
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Payement</label>
                <select name="payement" id="payement" class="form-select" aria-label="Default select example">
                    <?php
                        $sql="SELECT * FROM `payement`";
                        $affichages_payements=select($sql);
                    ?>
                    <?php foreach($affichages_payements as $affichages_payement):?>
                        <option value="<?=$affichages_payement['num_p']?>"><?=$affichages_payement['libelle_p']?></option>
                    <?php endforeach?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">CLIENT</label>
                <select name="client" id="client" class="form-select" aria-label="Default select example">
                    <?php
                        $sql="SELECT * FROM `client`";
                        $affichages_clients=select($sql);
                    ?>
                    <?php foreach($affichages_clients as $affichages_client):?>
                        <option value="<?=$affichages_client['id_client']?>"><?=$affichages_client['nom_client']?></option>
                    <?php endforeach?>
                </select>
            </div>
            <div class="mb-3 btn-connexion">
                <input type="submit" class="form-control" id="exampleFormControlInput1" value="Modifier" name="submit">
            </div> 
            
        </form>
        
    </div>
    
</body>
<script src="../../bootstrap-5.3.0-alpha1-dist/js/bootstrap.js"></script>
</html>