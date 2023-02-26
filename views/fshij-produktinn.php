<?php 
    require_once '../homeController.php';

    session_start();
    if((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && $_SESSION['role'] == 0) || !(isset($_SESSION['loggedin']))){
        header("location: ../index.php");
        exit;
    }

    if(isset($_GET['id'])){
        $produktiId = $_GET['id'];
    }
    

    $produkti = new homeController;
    $produkti->delete($produktiId);
    
?>