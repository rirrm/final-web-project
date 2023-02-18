<?php 
    require_once '../controllers/LajmiController.php';

    if(isset($_GET['id'])){
        $lajmiId = $_GET['id'];
    }

    $lajmi = new LajmiController;
    $lajmi->delete($lajmiId);
    
?>