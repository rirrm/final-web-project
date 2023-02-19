<?php 
    require_once '../LajmiController.php';

    if(isset($_GET['id'])){
        $lajmiId = $_GET['id'];
    }

    $lajmi = new LajmiController;
    $lajmi->delete($lajmiId);
    
?>