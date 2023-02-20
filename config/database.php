<?php

class Database{
    public $pdo;

    public function __construct(){
        try{
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }            
            $link=new PDO('mysql:host=localhost;dbname=haneul','root','');
            $this->pdo=$link;
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
    }
 }
?>