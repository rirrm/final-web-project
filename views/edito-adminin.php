<?php 
require_once '../new/userMapper.php';
include_once '../new/adminClass.php';
include_once '../new/registerLogic.php';

$mapper = new userMapper();
if(isset($_GET['id'])){
    $adminId = $_GET['id'];
}

$currentAdmin = $mapper->getUserByID($adminId);
$admin = new Admin($currentAdmin['email'], $currentAdmin['username'], $currentAdmin['userpassword'], $currentAdmin['role']);

// if(isset($_POST['Submit'])){
//     $admin->setEmail($_POST['register-emailaddress']);
//     $admin->setUsername($_POST['register-username']);
//     $admin->setPassword($_POST['register-password']);
//     $mapper->edit($admin,$adminId);
//     header("Location:dashboard.php");
//     exit();
// }

if(isset($_POST['Submit'])){
    $register = new RegisterLogic($_POST);
    $EmptyFields=$register->emptyFields();
    $EmailisValid = $register->validateEmail();
    $UsernameisValid = $register->validateUsername();
    $PasswordisValid = $register->validatePassword();
    $EmailExists=$register->emailExists();
    $UsernameExists=$register->usernameExists();
    if($EmailisValid && $UsernameisValid && $PasswordisValid){
        $register->insertData();
        $message = "Jeni regjistruar me sukses!";
    header("Location:../login.php?error=".urlencode($message));
        // return header("Location:../login.php");
    } else if($EmptyFields){
        $message = "Ju lutem plotesoni te gjitha fushat!";
        header("Location:../signup.php?error=".urlencode($message));
    }
    else if(!$EmailisValid){
    $message = "Email është jovalid!";
    header("Location:../signup.php?error=".urlencode($message));
}
else if($EmailExists){
    $message = "Ky email ekziston!";
    header("Location:../signup.php?error=".urlencode($message));
}
else if($UsernameExists){
    $message = "Username ekziston!";
    header("Location:../signup.php?error=".urlencode($message));
}
else if(!$UsernameisValid){
    $message = "Username nuk mund të përmbajë hapësira as karaktere speciale (vetëm . _ - lejohen)!";
    header("Location:../signup.php?error=".urlencode($message));
}else if(!$PasswordisValid){
    $message = "Password duhet të ketë së paku 8 karaktere dhe të përmbajë shkronja të vogla, të mëdha, numra dhe karaktere speciale!";
    header("Location:../signup.php?error=".urlencode($message));
}

    $mapper->edit($register,$adminId);
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
