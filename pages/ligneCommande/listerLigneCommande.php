<?php
    // require("/xampp/htdocs/solution_b/function/function.php");
    $sql="SELECT * FROM `ligne_commande`";
    $affichage_lignecommandes=select($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lister ligne commande</title>
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha1-dist/style.css">
</head>
<body>
<div class="form_index">
            <?php message();?>
            <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">ID_CLIENT</th>
                    <th scope="col">ID_COMMANDE</th>
                    <th scope="col">DATE</th>
                    <th scope="col">QUANTITE</th>
                    <th scope="col">PRIX</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($affichage_lignecommandes as $affichage_lignecommande): ?>
                    <tr>
                        
                        <td><?=$affichage_lignecommande['id_client'] ?></td>
                        <td><?=$affichage_lignecommande['id_commande'] ?></td>
                        <td><?=$affichage_lignecommande['date_c'] ?></td>
                        <td><?=$affichage_lignecommande['quantite_c'] ?></td>
                        <td><?=$affichage_lignecommande['prix'] ?></td>
                        <td>
                            <a href="?affichage=modifierLigneCommande&id_lignecommande=<?=$affichage_lignecommande['id_ligne'] ?>"><button type="button" class="btn btn-primary">Modifier</button></a> 
                            <a href="?affichage=supprimer&id_lignecommande=<?=$affichage_lignecommande['id_ligne'] ?>&test=7"><button type="button" class="btn btn-danger" id="modif">Supprimer</button></a>
                        </td>
                
                    </tr>
                <?php endforeach ?>
                
            </tbody>
        </table>

    </div>
</body>
</html>