<?php
    // require("/xampp/htdocs/solution_b/function/function.php");
    $sql="SELECT * FROM `lettre`";
    $affichage_lettres=select($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listerlettre</title>
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha1-dist/style.css">
</head>
<body>
<div class="form_index">
            <?php message();?>
            <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">OBJET</th>
                    <th scope="col">TYPE</th>
                    <th scope="col">ID_CLIENT</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($affichage_lettres as $affichage_lettre): ?>
                    <tr>
                        
                        <td><?=$affichage_lettre['objet'] ?></td>
                        <td><?=$affichage_lettre['type'] ?></td>
                        <td><?=$affichage_lettre['id_client'] ?></td>
                        <td>
                            <a href="?affichage=modifierLettre&id_lettre=<?=$affichage_lettre['num_lettre'] ?>"><button type="button" class="btn btn-primary">Modifier</button></a> 
                            <a href="?affichage=supprimer&id_lettre=<?=$affichage_lettre['num_lettre'] ?>&test=6"><button type="button" class="btn btn-danger" id="modif">Supprimer</button></a>
                        </td>
                
                    </tr>
                <?php endforeach ?>
                
            </tbody>
        </table>

    </div>
</body>
</html>