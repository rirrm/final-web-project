<?php

abstract class Person
{
    protected $email;
    protected $username;
    protected $password;
    protected $role;

    function __construct($email, $username, $password, $role)
    {
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
    }

    abstract protected function setSession();
    abstract protected function setCookie();
}
