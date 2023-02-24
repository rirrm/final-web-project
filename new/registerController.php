<?php
include_once 'simpleUserClass.php';
include_once 'adminClass.php';
require_once 'userMapper.php';
// include_once '../signup.php';
$emptyErr = $emailValidErr = $emailExistsErr = $usernameValidErr =$UsernameExistsErr = $passwordValid="";

if (isset($_POST['register-btn'])) {
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
}

class RegisterLogic
{
    private $email="";
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->email = $formData['register-emailaddress'];
        $this->username = $formData['register-username'];
        $this->password = $formData['register-password'];
    }


    public function emptyFields(){
        if(empty($this->email) || empty($this->username)|| empty($this->password)){
            return true;
        }
        return false;
    }

    public function validateEmail(){
        $emailRegex = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
        
        if(preg_match($emailRegex, $this->email)){
            return true;
        } else {
            return false;
        }
    }
    public function validateUsername(){
        $usernameRegex = "/^[a-zA-Z0-9._-]{3,15}$/";
        
        if(preg_match($usernameRegex, $this->username)){
            return true;
        } else {
            return false;
        }
    }
    public function validatePassword(){
        $passwordRegex = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/";
        
        if(preg_match($passwordRegex, $this->password)){
            return true;
        } else {
            return false;
        }
    }
    public function emailExists()
    {
            $mapper = new UserMapper();
            if ($mapper->emailExists($this->email)) {
                return true;
            } else {
                return false;
            }
    }

    public function usernameExists()
    {
            $mapper = new UserMapper();
            if ($mapper->usernameExists($this->username)) {
                return true;
            } else {
                return false;
            }
    }

    // public function insertData()
    // {
    //     $user = new SimpleUser($this->email, $this->username, $this->password, 0);

    //     $mapper = new UserMapper();
    //     $mapper->insertUser($user);
    //     header("Location:../index.php");
    // }

    public function insertData()
{
    $mapper = new UserMapper();

    // Get the total number of users in the database
    $numUsers = $mapper->countUsers();

    if ($numUsers < 2) {
        // If there are less than 2 users, set the role to 1
        $role = 1;
    } else {
        // If there are 2 or more users, set the role to 0
        $role = 0;
    }

    $user = new SimpleUser($this->email, $this->username, $this->password, $role);

    $mapper->insertUser($user);
    header("Location:../index.php");
}


    public function insertDataAdmin(){
        $admin = new Admin($this->email, $this->username, $this->password,1);

        $mapper = new UserMapper();
        $mapper->insertUser($admin);
        header("Location:../views/dashboard.php");
    }
    
}