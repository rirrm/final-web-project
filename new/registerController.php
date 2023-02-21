<?php
include_once 'simpleUserClass.php';
require_once 'userMapper.php';

if (isset($_POST['register-btn'])) {
    $register = new RegisterLogic($_POST);
    $isValid = $register->validateInput();
    if($isValid){
        $register->insertData();
        return header("Location:../login.php");
    } else {
        echo '<script>alert("Invalid input")</script>';
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

    public function validateInput(){
        $emailRegex = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
        $usernameRegex = "/^[a-zA-Z0-9_-]{3,15}$/";
        $passwordRegex = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/";
        
        if(preg_match($emailRegex, $this->email) && preg_match($usernameRegex, $this->username) && preg_match($passwordRegex, $this->password)){
            return true;
        } else {
            return false;
        }
    }

    public function insertData()
    {
        $user = new SimpleUser($this->email, $this->username, $this->password, 0);

        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header("Location:../index.php");
    }
}