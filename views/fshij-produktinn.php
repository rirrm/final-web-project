<?php 
    require_once '../homeController.php';

    if(isset($_GET['id'])){
        $produktiId = $_GET['id'];
    }
    

    $produkti = new homeController;
    $produkti->delete($produktiId);
    
?>