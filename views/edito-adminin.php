<?php 
require_once '../new/userMapper.php';
include_once '../new/adminClass.php';
include_once '../new/registerController.php';

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

<form method="POST"> 
    Email:
    <input type="text" name="register-emailaddress" value="<?php echo $admin->getEmail(); ?>">
    <br>
    Username
    <input type="text" name="register-username" value="<?php echo $admin->getUsername(); ?>">
    <br>
    Password:
    <input type="password" name="register-password" value="<?php echo $admin->getPassword(); ?>">
    <br>
    <input type="submit" name="Submit" value="Save" id="button">
</form>
