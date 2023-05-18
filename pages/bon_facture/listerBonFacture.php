<?php
    // require("/xampp/htdocs/solution_b/function/function.php");
    $sql="SELECT * FROM `bf`";
    $affichage_bonfactures=select($sql);
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
                    
                    <th scope="col">NOM</th>
                    <th scope="col">DESCRIPTION</th>
                    
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($affichage_bonfactures as $affichage_bonfacture): ?>
                    <tr>
                        
                        <td><?=$affichage_bonfacture['nom_bf'] ?></td>
                        <td><?=$affichage_bonfacture['description_bf'] ?></td>
                       
                        <td>
                            <a href="?affichage=modifierBonFacture&id_bonfacture=<?=$affichage_bonfacture['id_bf'] ?>"><button type="button" class="btn btn-primary">Modifier</button></a> 
                            <a href="?affichage=supprimer&id_bonfacture=<?=$affichage_bonfacture['id_bf'] ?>&test=4"><button type="button" class="btn btn-danger" id="modif">Supprimer</button></a>
                        </td>
                
                    </tr>
                <?php endforeach ?>
                
            </tbody>
        </table>

    </div>
</body>
</html>