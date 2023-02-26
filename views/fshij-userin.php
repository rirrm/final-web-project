<?php
require_once '../user/userMapper.php';

session_start();
if((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && $_SESSION['role'] == 0) || !(isset($_SESSION['loggedin']))){
    header("location: ../index.php");
    exit;
}

if(isset($_GET['id'])){
    $userId = $_GET['id'];

    $user = new userMapper();
    $user->deleteUser($userId);
}
?>
