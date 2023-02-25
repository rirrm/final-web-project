<?php 
    require_once '../new/userMapper.php';
    require_once '../new/registerController.php';

    $emptyErr = $emailValidErr = $emailExistsErr = $usernameValidErr =$UsernameExistsErr = $passwordValid=$success="";

    if (isset($_POST['register-btn'])) {
        $register = new RegisterLogic($_POST);
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
 <div class="errors">
          <span><?php echo $emailValidErr;?></span>
          <span> <?php echo $emailExistsErr;?></span>
          <span> <?php echo $usernameValidErr;?></span>
          <span><?php echo $UsernameExistsErr;?></span>
          <span> <?php echo $passwordValid;?></span>
</div>
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
<style>
  .errors{
  height:20x;
  width:450px;
  color:red;
  background-color: rgb(247, 203, 203);
  margin-left:25px;
}