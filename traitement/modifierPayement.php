<?php
    // require("/xampp/htdocs/solution_b/function/function.php");
    if(isset($_GET['id_payement'])){
        $id_payement=$_GET['id_payement'];
        
        $sql="SELECT * FROM `payement` WHERE num_p='".$id_payement."'";
        $affichage_payements=select($sql);
    }
    if(isset($_POST['submit'])){
        extract($_POST);
        if(!empty($nom) && !empty($description)){
            $sql="UPDATE `payement` SET `libelle_p`='$nom',`description_p`='$description',`signature_p`='$signature' WHERE num_p='".$id_payement."'";
            insert($sql);
           header("location:?affichage=listerPayement&msg=modification faite avec succès avec succès ");
        }else {
            header("location:?affichage=modifierPayement&msg=vauillez saisir des informations correctes ");
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
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/style.css">
</head>
<body>
    <div class="form_index">
        <form action="" method="post">
            <?php
                message();
            ?>
            <legend>Modification</legend>
            <?php foreach($affichage_payements as $affichage_payement):?>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">NOM</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$affichage_payement['libelle_p']?>" name="nom">
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">DESCRIPTION</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$affichage_payement['description_p']?>" name="description">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">SIGNATURE</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$affichage_payement['signature_p']?>" name="signature">
                </div>
                <div class="mb-3 btn-connexion">
                    <input type="submit" class="form-control" id="exampleFormControlInput1" value="modifier" name="submit">
                </div> 
                
            </form>
            
        </div>
        <?php endforeach ?>
    
</body>
<script src="../bootstrap-5.3.0-alpha1-dist/js/bootstrap.js"></script>
</html>