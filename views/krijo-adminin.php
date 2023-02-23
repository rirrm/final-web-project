<?php 
    require_once '../new/userMapper.php';
    require_once '../new/registerController.php';

    if(isset($_POST['Submit'])){
         $register=new RegisterLogic($_POST);
         $EmptyFields=$register->emptyFields();
         $EmailisValid = $register->validateEmail();
         $UsernameisValid = $register->validateUsername();
         $PasswordisValid = $register->validatePassword();
         $EmailExists=$register->emailExists();
         $UsernameExists=$register->usernameExists();
         if($EmailisValid && $UsernameisValid && $PasswordisValid){
            $register->insertData();
            $message = "Keni shtuar adminin me sukses!";
        header("Location:dashboard.php?error=".urlencode($message));
            // return header("Location:../login.php");
        } else if($EmptyFields){
            $message = "Ju lutem plotesoni te gjitha fushat!";
            header("Location:krijo-adminin.php?error=".urlencode($message));
        }
        else if(!$EmailisValid){
        $message = "Email është jovalid!";
        header("Location:krijo-adminin.php?error=".urlencode($message));
    }
    else if($EmailExists){
        $message = "Ky email ekziston!";
        header("Location:krijo-adminin.php?error=".urlencode($message));
    }
    else if($UsernameExists){
        $message = "Username ekziston!";
        header("Location:krijo-adminin.php?error=".urlencode($message));
    }
    else if(!$UsernameisValid){
        $message = "Username nuk mund të përmbajë hapësira as karaktere speciale (vetëm . _ - lejohen)!";
        header("Location:krijo-adminin.php?error=".urlencode($message));
    }else if(!$PasswordisValid){
        $message = "Password duhet të ketë së paku 8 karaktere dhe të përmbajë shkronja të vogla, të mëdha, numra dhe karaktere speciale!";
        header("Location:krijo-adminin.php?error=".urlencode($message));
    }
    }

if(isset($_GET['error'])){
  $error = $_GET['error'];
  echo '<script>alert("'.$error.'")</script>';
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

