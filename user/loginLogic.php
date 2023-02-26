<?php
include_once 'adminClass.php';
include_once 'simpleUserClass.php';
require_once 'userMapper.php';


class LoginLogic{

    private $username="";
    private $password="";

    public function __construct($formData)
    {
        $this->username=$formData['username'];
        $this->password=$formData['password'];
    }

    public function getUsername()
    {
        return $this->username;
    }
    
    function emptyFields(){
        if(empty($this->username)|| empty($this->password)){
            return true;
        }
        return false;
    }

    function usernameExists(){
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($this->username);
        if ($user == null || count($user) == 0) {
            return false;
        }else{
            return true;
        }
    }
    function passwordVerify()
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($this->username);
        if ($user && password_verify($this->password, $user['userpassword'])) {
            if ($user['role'] == 1) {
                $obj = new Admin($user['userID'], $user['username'], $user['userpassword'], $user['role']);
                $obj->setSession();
            } else {
                $obj = new SimpleUser($user['userID'], $user['username'], $user['userpassword'], $user['role']);
                $obj->setSession();
            }
            $_SESSION['loggedin'] = true;
            return true;
        } else {
            return false;
        }
    }
    
    
}  