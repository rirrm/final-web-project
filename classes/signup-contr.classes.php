<?php

class SignUpContr {
    private $emailaddress;
    private $username;
    private $password;

    private function __construct($emailaddress,$username,$password){
        $this->$emailaddress=$emailaddress;
        $this->$username=$username;
        $this->$password=$password;
    }

    
}