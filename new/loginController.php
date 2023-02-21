<?php
include_once 'adminClass.php';
include_once 'simpleUserClass.php';
require_once 'userMapper.php';
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

    if (isset($_POST['login-btn'])) {
       if(usernameAndPasswordCorrect($username,$password)){
         return header("Location:../index.php");
       }
       else{
        return header("Location:../login.php");
       }
    }
        
    function usernameAndPasswordCorrect($username, $password)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);
        if ($user == null || count($user) == 0) {
            return false;
        }
        else if (password_verify($password, $user['userpassword'])) {
            
            if ($user['role'] == 1) {
                $obj = new Admin($user['userID'], $user['username'], $user['userpassword'], $user['role']);
                $obj->setSession();
            } else {
                $obj = new SimpleUser($user['userID'], $user['username'], $user['userpassword'], $user['role']);
                $obj->setSession();
            }
            $_SESSION['loggedin'] = true;
            return true;
            
        } else return false;
    }


    
?>