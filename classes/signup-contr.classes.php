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

    private function emptyInput(){
        $result;
        if(empty($this->$emailaddress)||empty($this->$username)||empty($this->$password)){
            $result=false;
         }
         else{
            $result=true;
         }
         return $result;
    }

    private function invalidUsername(){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->$username)){
            $result=false;
        }
        else{
           $result=true;
        }
        return $result;
        }

    private function invalidEmail(){
        $result;
        if(!filter_var($this->$email, FILTER_VALIDATE_EMAIL)){
            $result=false;
        }
        else{
           $result=true;
        }
        return $result;
        }

    private function invalidPassword(){
        $result;
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
        
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            $result=false;
        }else{
            $result=true;
        }
        return $result;
    }
    }

 
