<?php 
    require_once '../new/userMapper.php';

    if(isset($_GET['id'])){
        $adminId = $_GET['id'];
    
        $admin = new userMapper();
        $admin->deleteUser($adminId);
    }
?>