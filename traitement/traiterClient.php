<?php
    if(isset($_GET['test'])){
        $test=$_GET['test'];
    }
    if(isset($_POST['submit'])){
        extract($_POST);
        if(!empty($nom) && !empty($telephone) && !empty($email) && !empty($bp) && !empty($rue)){
            require("/xampp/htdocs/solution_b/function/function.php");
            $sql="INSERT INTO `client`(`nom_client`, `telephone`, `email`, `bp`, `rue`) VALUES ('$nom','$telephone','$email','$bp','$rue')";
            insert($sql);
           
        }else {
            
        }
    }
?>