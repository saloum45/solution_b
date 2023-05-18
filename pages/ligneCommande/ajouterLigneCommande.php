<?php
    if(isset($_POST['submit'])){
        extract($_POST);
        if(!empty($commande) && !empty($date_c) && !empty($client) && !empty($quantite_c)&& !empty($prix)){
            // require("/xampp/htdocs/solution_b/function/function.php");
            $sql="INSERT INTO `ligne_commande`( `id_client`, `id_commande`, `date_c`, `quantite_c`, `prix`) VALUES ('$client','$commande','$date_c','$quantite_c','$prix')";
            insert($sql);
           header("location:?affichage=ajouterLigneCommande&msg=ligne commande ajoutée avec succès ");
        }else {
            header("location:?affichage=ajouterLigneCommande&msg=vauillez saisir des informations correctes ");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'une ligne commande</title>
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha1-dist/style.css">
</head>
<body>
    <div class="form_index">
        <form action="" method="post">
            <?php
               
                message();
            ?>
            <legend>Ajout d'une ligne commande</legend>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">COMMANDE</label>
                <select name="commande" id="commande" class="form-select" aria-label="Default select example">
                    <?php
                        $sql="SELECT * FROM `commande`";
                        $affichages_commandes=select($sql);
                    ?>
                    <?php foreach($affichages_commandes as $affichages_commande):?>
                        <option value="<?=$affichages_commande['id_commande']?>"><?=$affichages_commande['designation_c']?></option>
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
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">DATE</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir la date" name="date_c">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">QUANTITE</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir la quantite" name="quantite_c">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">PRIX</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le prix" name="prix">
            </div>
            <div class="mb-3 btn-connexion">
                <input type="submit" class="form-control" id="exampleFormControlInput1" value="Ajouter" name="submit">
            </div> 
            
        </form>
        
    </div>
    
</body>
<script src="../../bootstrap-5.3.0-alpha1-dist/js/bootstrap.js"></script>
</html>