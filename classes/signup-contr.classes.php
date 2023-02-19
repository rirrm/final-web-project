<?php

class SignUpContr extends Signup{
    private $emailaddress;
    private $username;
    private $password;

    private function __construct($emailaddress,$username,$password){
        $this->emailaddress=$emailaddress;
        $this->username=$username;
        $this->password=$password;
    }

    public function signupUser(){
        if($this->emptyInput()==false){
            header();
            exit();
        }

        if($this->invalidUsername()==false){
            header();
            exit();
        }

        if($this->invalidEmail()==false){
            header();
            exit();
        }

        if($this->invalidPassword()==false){
            header();
            exit();
        }

        if($this->pwdMatch()==false){
            header();
            exit();
        }

       
    }

    private function emptyInput(){
        $result;
        if(empty($this->emailaddress)||empty($this->username)||empty($this->password)){
            $result=false;
         }
         else{
            $result=true;
         }
         return $result;
    }

    private function invalidUsername(){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)){
            $result=false;
        }
        else{
           $result=true;
        }
        return $result;
        }

    private function invalidEmail(){
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
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

      //e pat edhe njo qe checks if the user or the email osht already ndatabaze

      protected function pwdMatch(){
        $result;
        if(!$this->checkUser($this->$email,$this->$username)){
            $result=false;
        }
        else{
            $result=true;
        }
        return $result;
    }

    $this->setUser($this->$email,$this->$username,$this->$password);
    }

 
