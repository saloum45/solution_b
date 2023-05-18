<?php
    // require("/xampp/htdocs/solution_b/function/function.php");
    if(isset($_POST['submit'])){
        extract($_POST);
        if(!empty($nom) && !empty($telephone) && !empty($email) && !empty($bp) && !empty($rue)){
            
            $sql="INSERT INTO `client`(`nom_client`, `telephone`, `email`, `bp`, `rue`) VALUES ('$nom','$telephone','$email','$bp','$rue')";
            insert($sql);
           header("location:?affichage=ajouterClient&msg=client ajouté avec succès ");
        }else {
            header("location:?affichage=ajouterClient&msg=vauillez saisir des informations correctes ");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'un client</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/style.css">
</head>
<body>
    <div class="form_index">
        <form action="" method="post">
            <?php
                // require("/xampp/htdocs/solution_b/function/function.php");
                message();
            ?>
            <legend>Inscription</legend>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NOM</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le nom" name="nom">
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">TELEPHONE</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le telephone" name="telephone">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">EMAIL</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir l'email'" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">BP</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le bp" name="bp">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">RUE</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir la rue" name="rue">
            </div>
            <div class="mb-3 btn-connexion">
                <input type="submit" class="form-control" id="exampleFormControlInput1" value="Ajouter" name="submit">
            </div>  
        </form>
        
    </div>
    
</body>
<script src="../bootstrap-5.3.0-alpha1-dist/js/bootstrap.js"></script>
</html>