<?php 
    require_once '../kontaktController.php';

    session_start();
    if((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && $_SESSION['role'] == 0) || !(isset($_SESSION['loggedin']))){
        header("location: ../index.php");
        exit;
    }

    if(isset($_GET['id'])){
        $kontaktID = $_GET['id'];

    $kontakt = new kontaktController();
    $kontakt->deleteKontaktin($kontaktID);
    }
?>