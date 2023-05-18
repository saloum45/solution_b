<?php
    // require("/xampp/htdocs/solution_b/function/function.php");
    if(isset($_GET['id_client'])){
        $id_client=$_GET['id_client'];
        $sql="SELECT * FROM `client` WHERE id_client='".$id_client."'";
        $affichage_clients=select($sql);
    }
    
    if(isset($_POST['submit'])){
        extract($_POST);
        if(!empty($nom) && !empty($telephone) && !empty($email) && !empty($bp) && !empty($rue)){
            $sql="UPDATE `client` SET `nom_client`='$nom',`telephone`='$telephone',`email`='$email',`bp`='$bp',`rue`='$rue' WHERE id_client='".$id_client."'";
            update($sql);
           header("location:?affichage=listerClient&msg=modification faite avec succès ");
        }else {
            header("location:?affichage=modifierClient&msg=vauillez saisir des informations correctes ");
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
            <?php foreach($affichage_clients as $affichage_client):?>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">NOM</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$affichage_client['nom_client']?>" name="nom">
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">TELEPHONE</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$affichage_client['telephone']?>" name="telephone">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">EMAIL</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$affichage_client['email']?>" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">BP</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$affichage_client['bp']?>" name="bp">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">RUE</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$affichage_client['rue']?>" name="rue">
                </div>
                <div class="mb-3 btn-connexion">
                    <input type="submit" class="form-control" id="exampleFormControlInput1" value="modifier" name="submit">
                </div>  
            <?php endforeach?>
        </form>
        
    </div>
    
</body>
<script src="../bootstrap-5.3.0-alpha1-dist/js/bootstrap.js"></script>
</html>