<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    header("location: index.php");
    exit;
}
include_once 'new/registerController.php';
// if(isset($_GET['error'])){
//   $error = $_GET['error'];
//   echo '<script>alert("'.$error.'")</script>';
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<?php 
include "header.php"; 
$emptyErr = $emailValidErr = $emailExistsErr = $usernameValidErr =$UsernameExistsErr = $passwordValid=$success=$email="";

if (isset($_POST['register-btn'])) {
    $register = new RegisterLogic($_POST);
    $email=$register->getEmail();
    $username=$register->getUsername();
    $EmptyFields=$register->emptyFields();
    $EmailisValid = $register->validateEmail();
    $UsernameisValid = $register->validateUsername();
    $PasswordisValid = $register->validatePassword();
    $EmailExists=$register->emailExists();
    $UsernameExists=$register->usernameExists();
    if(!$EmptyFields && $EmailisValid && $UsernameisValid && $PasswordisValid && !$EmailExists && !$UsernameExists){
        $register->insertData();
        $success = "Jeni regjistruar me sukses!";
    // header("Location:../login.php?error=".urlencode($message));
        // return header("Location:../login.php");
        header("location:login.php");
    } else if($EmptyFields){
        $emptyErr = "Ju lutem plotesoni te gjitha fushat!";
        // header("Location:../signup.php?error=".urlencode($message));
    }
    else if(!$EmailisValid){
        $emailValidErr = "Email është jovalid!";
    // header("Location:../signup.php?error=".urlencode($message));
}
else if($EmailExists){
    $emailExistsErr = "Ky email ekziston!";
    //header("Location:../signup.php?error=".urlencode($message));
}
else if($UsernameExists){
    $UsernameExistsErr = "Username ekziston!";
   // header("Location:../signup.php?error=".urlencode($message));
}
else if(!$UsernameisValid){
    $usernameValidErr = "Username nuk mund të përmbajë hapësira as karaktere speciale!";
    //header("Location:../signup.php?error=".urlencode($message));
}else if(!$PasswordisValid){
    $passwordValid= "Password duhet të ketë së paku 8 karaktere dhe të përmbajë shkronja të vogla, të mëdha, numra dhe karaktere speciale!";
   // header("Location:../signup.php?error=".urlencode($message));
}
}

?>
    <body>
        <div class="kufiza">
            <div>
              <img src="./images/haileybw.jpg" alt="" class="lsimg">
          </div>
          <div class="center">
          <div class="errors">
          <span><?php echo $emailValidErr;?></span>
          <span> <?php echo $emailExistsErr;?></span>
          <span> <?php echo $usernameValidErr;?></span>
          <span><?php echo $UsernameExistsErr;?></span>
          <span> <?php echo $passwordValid;?></span>
</div>
            <h1>Create Account</h1>
           
            <form class="login_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="form" onsubmit="return validated()">
                <div class="txt_field">
                    <input autocomplete="off" type="text" name="register-emailaddress" id="email" required value="<?php echo $email;?>">
                    <span></span>
                    <label for="emailaddress">Email</label>

                </div>
              <div class="txt_field">
                <input autocomplete="off" type="text" name="register-username" id="user" required value="<?php echo $username;?>">
                <span></span>
                <label for="username">Username</label>

              </div>
              <div class="txt_field">
                <input type="password" name="register-password" id="pass" required>
                <span></span>
                <label for="password" >Password</label>

              </div>
              <input type="submit" name="register-btn" value="REGISTER">
              <div class="signup_link">
                Already have an account?<a href="login.php">Sign in!</a>
              </div>
            </form>
          </div>
          
          </div>
          
       <?php 
    include "footer.php";  
  
?>
    <script src="javascript/validationsignup.js"></script>
</body>
</html>
