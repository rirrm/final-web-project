<?php
include_once 'simpleUserClass.php';
include_once 'adminClass.php';
require_once 'userMapper.php';


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

    public function getEmail()
    {
        return $this->email;
    }

    public function getUsername()
    {
        return $this->username;
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


    public function insertData()
{
    $mapper = new UserMapper();
    $numUsers = $mapper->countUsers();
    if ($numUsers < 2) {
        $role = 1;
    } else {
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