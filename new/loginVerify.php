<?php
include_once 'adminClass.php';
include_once 'simpleUserClass.php';
require_once 'userMapper.php';
session_start();
//main
if (isset($_POST['login-btn'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
} else if (isset($_POST['register-btn'])) {
    $register = new RegisterLogic($_POST);
    $register->insertData();
} else {
    header("Location:../index.php");
}

class LoginLogic
{
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->username, $this->password)) {
            echo '1';
            header("Location:../index.php");
        } else if ($this->usernameAndPasswordCorrect($this->username, $this->password)) {
            echo '2';
            header('Location:../home.php');
        } else {
            echo '3';
            header("Location:../index.php");
        }
    }

    private function variablesNotDefinedWell($username, $password)
    {
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($username, $password)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);
        if ($user == null || count($user) == 0) return false;
        else if (password_verify($password, $user['userPassword'])) {
            if ($user['role'] == 1) {
                $obj = new Admin($user['id'], $user['username'], $user['password'], $user['role']);
                $obj->setSession();
            } else {
                $obj = new SimpleUser($user['id'], $user['username'], $user['password'], $user['role'], "");
                $obj->setSession();
            }
            return true;
        } else return false;
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

    public function insertData()
    {
        $user = new SimpleUser($this->email, $this->username, $this->password, 0);

        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header("Location:../index.php");
    }
}
