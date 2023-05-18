<?php
    // require("/xampp/htdocs/solution_b/function/function.php");
    if(isset($_GET['id_bonfacture'])){
        $id_bonfacture=$_GET['id_bonfacture'];
        $sql="SELECT * FROM `bf` WHERE id_bf='".$id_bonfacture."'";
        $affichage_bonfactures=select($sql);
    }
    if(isset($_POST['submit'])){
        extract($_POST);
        if(!empty($nom) && !empty($description)){
            $sql="UPDATE `bf` SET `nom_bf`='$nom',`description_bf`='$description' WHERE id_bf='".$id_bonfacture."'";
            insert($sql);
           header("location:?affichage=listerBonFacture&msg=modification faite avec succès ");
        }else {
            header("location:?affichage=ajouterBonFacture&msg=vauillez saisir des informations correctes ");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
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
            <?php foreach($affichage_bonfactures as $affichage_bonfacture):?>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">NOM</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le nom" name="nom" value="<?=$affichage_bonfacture['nom_bf']?>">
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">DESCRIPTION</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir la description" name="description" value="<?=$affichage_bonfacture['description_bf']?>">
                </div>
            <?php endforeach?>
            <div class="mb-3 btn-connexion">
                <input type="submit" class="form-control" id="exampleFormControlInput1" value="modifier" name="submit">
            </div> 
            
            
        </form>
        
    </div>
    
</body>
<script src="../../bootstrap-5.3.0-alpha1-dist/js/bootstrap.js"></script>
</html>