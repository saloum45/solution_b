<?php
    // require("/xampp/htdocs/solution_b/function/function.php");
    if(isset($_POST['submit'])){
        extract($_POST);
        if(!empty($nom) && !empty($description)){
            $sql="INSERT INTO `payement`( `libelle_p`, `description_p`, `signature_p`) VALUES ('$nom','$description','$signature')";
            insert($sql);
           header("location:?affichage=ajouterPayement&msg=payement ajouté avec succès ");
        }else {
            header("location:?affichage=ajouterPayement&msg=vauillez saisir des informations correctes ");
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
            <legend>Ajout d'un payement</legend>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NOM</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le nom" name="nom">
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">DESCRIPTION</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir la description" name="description">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">SIGNATURE</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir la signature'" name="signature">
            </div>
            <div class="mb-3 btn-connexion">
                <input type="submit" class="form-control" id="exampleFormControlInput1" value="ajouter" name="submit">
            </div> 
            
        </form>
        
    </div>
    
</body>
<script src="../../bootstrap-5.3.0-alpha1-dist/js/bootstrap.js"></script>
</html>