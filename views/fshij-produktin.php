<?php 
    require_once '../ProdController.php';

    session_start();
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && $_SESSION['role'] == 0){
        header("location: ../index.php");
        exit;
    }

    if(isset($_GET['id'])){
        $produktiId = $_GET['id'];
    }
    

    $produkti = new ProdController;
    $produkti->delete($produktiId);
    
?>