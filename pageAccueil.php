<?php 
    ob_start();
    require("/xampp/htdocs/solution_b/function/function.php");
    est_connecte();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/style.css">
</head>
<body>
    
    <div class="dashboard">
        <div class="element">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Client
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?affichage=ajouterClient">Ajouter</a></li>
                    <li><a class="dropdown-item" href="?affichage=listerClient">Lister</a></li>
                </ul>
            </div>
        </div>
        <div class="element">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Payement
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?affichage=ajouterPayement">Ajouter</a></li>
                    <li><a class="dropdown-item" href="?affichage=listerPayement">Lister</a></li>
                </ul>
            </div>
        </div>
        <div class="element">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Bon fabrication
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?affichage=ajouterBonFacture">Ajouter</a></li>
                    <li><a class="dropdown-item" href="?affichage=listerBonFacture">Lister</a></li>
                </ul>
            </div>
        </div>
        <div class="element">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Commande
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?affichage=ajouterCommande">Ajouter</a></li>
                    <li><a class="dropdown-item" href="?affichage=listerCommande">Lister</a></li>
                </ul>
            </div>
        </div>
        <div class="element">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ligne_Commande
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?affichage=ajouterLigneCommande">Ajouter</a></li>
                    <li><a class="dropdown-item" href="?affichage=listerLigneCommande">Lister</a></li>
                </ul>
            </div>
        </div>
        <div class="element">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Lettre
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?affichage=ajouterLettre">Ajouter</a></li>
                    <li><a class="dropdown-item" href="?affichage=listerLettre">Lister</a></li>
                </ul>
            </div>
        </div>
        <div class="element">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Facture
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?affichage=ajouterFacture">Ajouter</a></li>
                    <li><a class="dropdown-item" href="?affichage=listerFacture">Lister</a></li>
                </ul>
            </div>
        </div>


        <div class="logout">
            <a href="?affichage=deconnexion">Deconnexion</a>
        </div>
        

    </div>
    <div class="affichage" id="affichage">
        <?php
            if(isset($_REQUEST['affichage'])){
                $affichage=$_REQUEST['affichage'];
                if($affichage=="ajouterClient"){
                    include("/xampp/htdocs/solution_b/pages/ajouterClient.php");
                }else if($affichage=="traiterClient"){
                    include("/xampp/htdocs/solution_b/traitement/traiterClient.php");
                }else if($affichage=="listerClient"){
                    include("/xampp/htdocs/solution_b/pages/listerClient.php");
                }else if($affichage=="modifierClient"){
                    include("/xampp/htdocs/solution_b/traitement/modifierClient.php");
                }else if($affichage=="supprimer"){
                    include("/xampp/htdocs/solution_b/traitement/supprimer.php");
                }else if($affichage=="ajouterPayement"){
                    include("/xampp/htdocs/solution_b/pages/payement/ajouterPayement.php");
                }else if($affichage=="listerPayement"){
                    include("/xampp/htdocs/solution_b/pages/payement/listerPayement.php");
                }else if($affichage=="modifierPayement"){
                    include("/xampp/htdocs/solution_b/traitement/modifierPayement.php");
                }else if($affichage=="deconnexion"){
                    include("/xampp/htdocs/solution_b/pages/deconnexion.php");
                }else if($affichage=="ajouterFacture"){
                    include("/xampp/htdocs/solution_b/pages/facture/ajouterFacture.php");
                }else if($affichage=="listerFacture"){
                    include("/xampp/htdocs/solution_b/pages/facture/listerFacture.php");
                }else if($affichage=="modifierFacture"){
                    include("/xampp/htdocs/solution_b/pages/facture/modifierFacture.php");
                }else if($affichage=="ajouterBonFacture"){
                    include("/xampp/htdocs/solution_b/pages/bon_facture/ajoutBonFacture.php");
                }else if($affichage=="listerBonFacture"){
                    include("/xampp/htdocs/solution_b/pages/bon_facture/listerBonFacture.php");
                }else if($affichage=="modifierBonFacture"){
                    include("/xampp/htdocs/solution_b/pages/bon_facture/modifierBonFacture.php");
                }else if($affichage=="ajouterCommande"){
                    include("/xampp/htdocs/solution_b/pages/commande/ajouterCommande.php");
                }else if($affichage=="listerCommande"){
                    include("/xampp/htdocs/solution_b/pages/commande/listerCommande.php");
                }else if($affichage=="modifiercommande"){
                    include("/xampp/htdocs/solution_b/pages/commande/modifierCommande.php");
                }else if($affichage=="ajouterLettre"){
                    include("/xampp/htdocs/solution_b/pages/lettre/ajouterLettre.php");
                }else if($affichage=="listerLettre"){
                    include("/xampp/htdocs/solution_b/pages/lettre/listerLettre.php");
                }else if($affichage=="modifierLettre"){
                    include("/xampp/htdocs/solution_b/pages/lettre/modifierLettre.php");
                }else if($affichage=="ajouterLigneCommande"){
                    include("/xampp/htdocs/solution_b/pages/ligneCommande/ajouterLigneCommande.php");
                }else if($affichage=="listerLigneCommande"){
                    include("/xampp/htdocs/solution_b/pages/ligneCommande/listerLigneCommande.php");
                }else if($affichage=="modifierLigneCommande"){
                    include("/xampp/htdocs/solution_b/pages/ligneCommande/modifierLigneCommande.php");
                }
            }
        ?>
    </div>

</body>
<script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
</html>