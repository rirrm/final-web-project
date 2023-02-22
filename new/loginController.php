<?php
include_once 'adminClass.php';
include_once 'simpleUserClass.php';
require_once 'userMapper.php';

if (isset($_POST['login-btn'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(usernameAndPasswordCorrect($username,$password)){
            return header("Location:../index.php");
        }
        else{
            return header("Location:../login.php");
        }
    } else {
        // handle the case where the keys are not set
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