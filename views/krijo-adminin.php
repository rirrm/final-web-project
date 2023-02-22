<?php 
    require_once '../new/userMapper.php';
    require_once '../new/registerController.php';

    if(isset($_POST['Submit'])){
         $rl=new RegisterLogic($_POST);
         $rl->insertDataAdmin();
    }
    
?>

    <form method="POST"> 
        Email:
        <input type="text" name="register-emailaddress">
        <br>
        Username
        <input type="text" name="register-username">
        <br>
        Password:
        <input type="password" name="register-password">
        <br>
        <input type="Submit" name="Submit" value="Save" id="button">
    </form>

