<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/style.css">
</head>

<body>
    <!-- <div class="form_index">
        <form action="../traitement/traiterInscription.php" method="post">
            
            <legend>Inscription</legend>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NOM</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le nom" name="nom">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">PRENOM</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le prenom" name="prenom">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">EMAIL</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="saisir l'email" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">LOGIN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le login" name="login">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">PASS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le pass" name="pass">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">CONFIRM_PASS</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le pass" name="confirm_pass">
            </div>
            <div class="mb-3 btn-connexion">
                <input type="submit" class="form-control" id="exampleFormControlInput1" value="s'inscrire" name="submit">
            </div>
        </form>

    </div> -->

    <div class="d-flex justify-content-center">
        <div class="element">
            <form action="../traitement/traiterInscription.php" method="post">
                <?php
                require("/xampp/htdocs/solution_b/function/function.php");
                message();
                ?>
                <legend>Inscription</legend>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">NOM</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le nom" name="nom">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">PRENOM</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le prenom" name="prenom">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">EMAIL</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="saisir l'email" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">LOGIN</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le login" name="login">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">PASS</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le pass" name="pass">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">CONFIRM_PASS</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="saisir le pass" name="confirm_pass">
                </div>
                <div class="mb-3 btn-connexion">
                    <input type="submit" class="form-control" id="exampleFormControlInput1" value="s'inscrire" name="submit">
                </div>
            </form>
        </div>
        <div class="element">
            <h1 class="display-4">KS</h1>
            <h1 class="display-5">Pièce Métalique</h1>
            <hr>
            <h2>Inscrivez-vous</h2>
        </div>
    </div>

</body>
<script src="../bootstrap-5.3.0-alpha1-dist/js/bootstrap.js"></script>

</html>