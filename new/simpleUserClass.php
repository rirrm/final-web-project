<?php
include_once 'personClass.php';

class SimpleUser extends Person
{
    
    public function __construct($email, $username,  $password, $role)
    {
        parent::__construct($email, $username, $password, $role);
    }

    public function setSession()
    {
        $_SESSION["role"] = "0";
        $_SESSION['roleName'] = "SimpleUser";
    }

    public function setCookie()
    {
        setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }

    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getRole()
    {
        return $this->role;
    }
}
