<?php 
require_once '../user/userMapper.php';
include_once '../user/adminClass.php';
include_once '../user/registerLogic.php';

session_start();
if((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && $_SESSION['role'] == 0) || !(isset($_SESSION['loggedin']))){
    header("location: ../index.php");
    exit;
}

$mapper = new userMapper();
if(isset($_GET['id'])){
    $adminId = $_GET['id'];
}

$currentAdmin = $mapper->getUserByID($adminId);
$admin = new Admin($currentAdmin['email'], $currentAdmin['username'], $currentAdmin['userpassword'], $currentAdmin['role']);

 if(isset($_POST['Submit'])){
     $admin->setEmail($_POST['register-emailaddress']);
     $admin->setUsername($_POST['register-username']);
    $admin->setPassword($_POST['register-password']);
     $mapper->edit($admin,$adminId);
  header("Location:dashboard.php");
    exit();
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/crud.css">
</head>
<body>
<h2><a href="dashboard.php">Kthehu ne Dashboard</a></h2>
<div class="kufiza">
<div class="center">
    <h1>Edito adminin</h1>
<form method="POST"> 
<div class="txt_field">
    <input type="text" name="register-emailaddress" value="<?php echo $admin->getEmail(); ?>">
    <span></span>
        <label for="register-emailaddress">Email</label>
        </div>

    <div class="txt_field">
    <input type="text" name="register-username" value="<?php echo $admin->getUsername(); ?>">
    <span></span>
        <label for="register-username">Username</label>
        </div>

    <div class="txt_field">
    <input type="password" name="register-password" value="<?php echo $admin->getPassword(); ?>">
    <span></span>
        <label for="password">Password</label>
        </div>
    <input type="submit" name="Submit" value="Save" id="button">
</form>

