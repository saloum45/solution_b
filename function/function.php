<?php
    session_start();
    function message(){
        if(isset($_GET['msg'])){
            $msg=$_GET['msg'];
            echo '
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    '.$msg.'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
    }
    function insert($sql){
        include("/xampp/htdocs/solution_b/database/connexion.php");
        $insert=$conn->prepare($sql);
        $insert->execute();
    }

    function select($sql){
        include("/xampp/htdocs/solution_b/database/connexion.php");
        $select=$conn->prepare($sql);
        $select->execute();
        return $select;
    }
    function update($sql){
        include("/xampp/htdocs/solution_b/database/connexion.php");
        $update=$conn->prepare($sql);
        $update->execute();
    }
    function delete($sql){
        include("/xampp/htdocs/solution_b/database/connexion.php");
        $update=$conn->prepare($sql);
        $update->execute();
    }

    function est_connecte(){
        if(!isset($_SESSION['login'])){
            header("location:index.php");
        }
    }

    function deconnexion(){
        session_destroy();
        header("location:index.php");
    }