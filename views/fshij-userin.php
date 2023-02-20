<?php
require_once '../new/userMapper.php';

if(isset($_GET['id'])){
    $userId = $_GET['id'];

    $user = new userMapper();
    $user->deleteUser($userId);
}
?>
