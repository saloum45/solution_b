<?php
    // require("/xampp/htdocs/solution_b/function/function.php");
    $sql="SELECT * FROM `commande`";
    $affichage_commandes=select($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listercommande</title>
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
                    <th scope="col">ID_BON FABRICATION</th>
                    <th scope="col">ID_FACTURE</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($affichage_commandes as $affichage_commande): ?>
                    <tr>
                        
                        <td><?=$affichage_commande['designation_c'] ?></td>
                        <td><?=$affichage_commande['id_bf'] ?></td>
                        <td><?=$affichage_commande['num_f'] ?></td>
                        <td>
                            <a href="?affichage=modifiercommande&id_commande=<?=$affichage_commande['id_commande'] ?>"><button type="button" class="btn btn-primary">Modifier</button></a> 
                            <a href="?affichage=supprimer&id_commande=<?=$affichage_commande['id_commande'] ?>&test=5"><button type="button" class="btn btn-danger" id="modif">Supprimer</button></a>
                        </td>
                    </tr>
                <?php endforeach ?>
                
            </tbody>
        </table>

    </div>
</body>
</html>