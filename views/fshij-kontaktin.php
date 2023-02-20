<?php 
    require_once '../kontaktController.php';

    if(isset($_GET['id'])){
        $kontaktID = $_GET['id'];
    }

    $kontakt = new kontaktController;
    $kontakt->deleteKontaktin($kontaktID);
    
?>