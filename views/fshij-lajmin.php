<?php 
    require_once '../LajmiController.php';

    session_start();
    if((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && $_SESSION['role'] == 0) || !(isset($_SESSION['loggedin']))){
        header("location: ../index.php");
        exit;
    }

    if(isset($_GET['id'])){
        $lajmiId = $_GET['id'];
    }

    $lajmi = new LajmiController;
    $lajmi->delete($lajmiId);
    
?>