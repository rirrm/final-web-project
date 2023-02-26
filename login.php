<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    header("location: index.php");
    exit;
}
include "user/loginLogic.php";

?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<?php 
include "header.php"; 
$usernameValidErr = $passwordValid=$username="";
if (isset($_POST['login-btn'])) {
    $login=new LoginLogic($_POST);
    $username=$login->getUsername();
    $EmptyFields=$login->emptyFields();
    $usernameExists=$login->usernameExists();
    $passwordVerify=$login->passwordVerify();

    if($usernameExists){
            if($passwordVerify){
                    header("Location:index.php"); 
                }
                else{
                    $passwordValid = "Password është gabim!";
            }
        }
        else{
            $usernameValidErr = "Username nuk ekziston!";
        }
    } 
?>
    <body>
      <div class="kufiza">
        <div>
          <img src="./images/haileybw.jpg" alt="" class="lsimg">
      </div>
        <div class="center" id="logincenter">
        <div class="errors">
          <span> <?php echo $usernameValidErr;?></span>
          <span> <?php echo $passwordValid;?></span>
</div>
            <h1>Login</h1>
            <form class="login_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="form" onsubmit="return validated()">
              <div class="txt_field">
                <input autocomplete="off" type="text" name="username" id="user" required value="<?php echo $username;?>">
                <span></span>
                <label for="username">Username</label>
              </div>
              <div class="txt_field">
                <input type="password" name="password" id="pass" required>
                <span></span>
                <label for="password" >Password</label>
              </div>
              <input type="submit" name="login-btn" value="SIGN IN">
              <div class="signup_link">
                Don't have an account? <a href="signup.php">Sign up!</a>
              </div>
            </form>
          </div>
          </div>
       <?php 
    include "footer.php";  
?>
    <script src="javascript/validation.js"></script>
</body>
</html>
