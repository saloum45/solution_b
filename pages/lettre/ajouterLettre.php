<?php
    if(isset($_POST['submit'])){
        extract($_POST);
        if(!empty($objet) && !empty($type) && !empty($client)){
            // require("/xampp/htdocs/solution_b/function/function.php");
            $sql="INSERT INTO `lettre`( `objet`, `type`, `id_client`) VALUES ('$objet','$type','$client')";
            insert($sql);
           header("location:?affichage=ajouterFacture&msg=Facture ajoutée avec succès ");
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
            <legend>Ajout d'une lettre</legend>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">OBJET</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="saisir l'objet" name="objet"></textarea>
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">TYPE</label>
                <select name="type" id="type" class="form-select" aria-label="Default select example">
                    <option value="refus">refus</option>
                    <option value="relance">relance</option>
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
                <input type="submit" class="form-control" id="exampleFormControlInput1" value="Ajouter" name="submit">
            </div> 
            
        </form>
        
    </div>
    
</body>
<script src="../../bootstrap-5.3.0-alpha1-dist/js/bootstrap.js"></script>
</html>