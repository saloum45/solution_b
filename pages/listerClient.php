<?php
    // require("/xampp/htdocs/solution_b/function/function.php");
    $sql="SELECT * FROM `client` ";
    $affichage_clients=select($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listerclient</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/style.css">
</head>
<body>
<div class="form_index">
    <?php message();?>
            <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">NOM</th>
                    <th scope="col">TELEPHONE</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">BP</th>
                    <th scope="col">RUE</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($affichage_clients as $affichage_client): ?>
                    <tr>
                        
                        <td><?=$affichage_client['nom_client'] ?></td>
                        <td><?=$affichage_client['telephone'] ?></td>
                        <td><?=$affichage_client['email'] ?></td>
                        <td><?=$affichage_client['bp'] ?></td>
                        <td><?=$affichage_client['rue'] ?></td>
                        <td>
                            <a href="?affichage=modifierClient&id_client=<?=$affichage_client['id_client'] ?>"><button type="button" class="btn btn-primary">Modifier</button></a> 
                            <a href="?affichage=supprimer&id_client=<?=$affichage_client['id_client'] ?>&test=1"><button type="button" class="btn btn-danger" id="modif">Supprimer</button></a>
                        </td>
                
                    </tr>
                <?php endforeach ?>
                
            </tbody>
        </table>

    </div>
</body>
</html>