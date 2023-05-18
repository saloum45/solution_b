<?php
    // require("/xampp/htdocs/solution_b/function/function.php");
    $sql="SELECT * FROM `payement`";
    $affichage_payements=select($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listerPayement</title>
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha1-dist/style.css">
</head>
<body>
<div class="form_index">
            <?php message();?>
            <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">LIBELLE</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">SIGNATURE</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($affichage_payements as $affichage_payement): ?>
                    <tr>
                        
                        <td><?=$affichage_payement['libelle_p'] ?></td>
                        <td><?=$affichage_payement['description_p'] ?></td>
                        <td><?=$affichage_payement['signature_p'] ?></td>
                        <td>
                            <a href="?affichage=modifierPayement&id_payement=<?=$affichage_payement['num_p'] ?>"><button type="button" class="btn btn-primary">Modifier</button></a> 
                            <a href="?affichage=supprimer&id_payement=<?=$affichage_payement['num_p'] ?>&test=2"><button type="button" class="btn btn-danger" id="modif">Supprimer</button></a>
                        </td>
                
                    </tr>
                <?php endforeach ?>
                
            </tbody>
        </table>

    </div>
</body>
</html>