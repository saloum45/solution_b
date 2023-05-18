<?php
    if(isset($_POST['submit'])){
        extract($_POST);
        if(!empty($nom)&& !empty($prenom) &&!empty($email)&& !empty($login) &&!empty($pass)&& !empty($confirm_pass) && $pass==$confirm_pass){
            require("/xampp/htdocs/solution_b/function/function.php");
            $sql="INSERT INTO `utilisateur`(`nom`, `prenom`, `email`, `login`, `pass`) VALUES ('$nom','$prenom','$email','$login','$pass')";
            insert($sql);
            header("location:../index.php?msg=inscription faite avec succes connectez-vous maintenant");
        }else{
            header("location:../pages/inscription.php?msg=veuillez saisir des informations correctes");
        }
    }
?>