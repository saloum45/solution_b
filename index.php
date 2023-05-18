<?php
require("/xampp/htdocs/solution_b/function/function.php");
if (isset($_POST['submit'])) {
    extract($_POST);
    if (!empty($login) && !empty($pass)) {
        require("/xampp/htdocs/solution_b/database/connexion.php");
        $sql = "SELECT * FROM `utilisateur` WHERE login='" . $login . "' and pass='" . $pass . "'";
        $insert = $conn->prepare($sql);
        $insert->execute();
        if ($insert->rowCount() > 0) {
            $_SESSION['login'] = $login;
            header("location:pageAccueil.php?affichage=image");
        } else {
            # code...
            header("location:index.php?msg=veuillez saisir des infromations correctes ");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index.php</title>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/style.css">
</head>

<body>
    <!-- <div class="form_index">
       
        <form action="" method="post">
            <legend>Connexion</legend>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">LOGIN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le login" name="login">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">PASS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le pass" name="pass">
            </div>
            <div class="mb-3 btn-connexion">

                <input type="submit" class="form-control" id="exampleFormControlInput1" value="se connecter" name="submit">
            </div>
        </form>
        <div class="mb-3 dernier-a">
            <a href="pages/inscription.php" class="btn btn-primary ">Inscription</a>
        </div>

    </div> -->

    <div class="d-flex justify-content-center">
        <div class="element">
            <?php

            message();
            ?>
            <form action="" method="post">
                <legend>Connexion</legend>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">LOGIN</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le login" name="login">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">PASS</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le pass" name="pass">
                </div>
                <div class="mb-3 btn-connexion">

                    <input type="submit" class="form-control" id="exampleFormControlInput1" value="se connecter" name="submit">
                </div>
            </form>
            <div class="mb-3 dernier-a">
                <a href="pages/inscription.php" class="btn btn-primary ">Inscription</a>
            </div>

        </div>
        <div class="element">
            <h1 class="display-4">KS</h1>
            <h1 class="display-5">Pièce Métalique</h1>
            <hr>
            <h2>Connectez-vous</h2>
        </div>
    </div>
</body>
<script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.js"></script>

</html>