<?php
    // require("/xampp/htdocs/solution_b/function/function.php");
    $sql="SELECT * FROM `facture`";
    $affichage_factures=select($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listerFacture</title>
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha1-dist/style.css">
</head>
<body>
<div class="form_index">
            <?php message();?>
            <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">DESIGNATION</th>
                    <th scope="col">ID_PAYEMENT</th>
                    <th scope="col">ID_CLIENT</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($affichage_factures as $affichage_Facture): ?>
                    <tr>
                        
                        <td><?=$affichage_Facture['designation'] ?></td>
                        <td><?=$affichage_Facture['num_p'] ?></td>
                        <td><?=$affichage_Facture['id_client'] ?></td>
                        <td>
                            <a href="?affichage=modifierFacture&id_Facture=<?=$affichage_Facture['num_f'] ?>"><button type="button" class="btn btn-primary">Modifier</button></a> 
                            <a href="?affichage=supprimer&id_Facture=<?=$affichage_Facture['num_f'] ?>&test=3"><button type="button" class="btn btn-danger" id="modif">Supprimer</button></a>
                        </td>
                
                    </tr>
                <?php endforeach ?>
                
            </tbody>
        </table>

    </div>
</body>
</html>