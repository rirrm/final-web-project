<?php 
    require_once '../ProdController.php';

    if(isset($_GET['id'])){
        $produktiId = $_GET['id'];
    }
    

    $produkti = new ProdController;
    $produkti->delete($produktiId);
    
?>