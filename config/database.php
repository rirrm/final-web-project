<?php

class Database{
    public $pdo;

    public function __construct(){
        try{
            session_start();
            $link=new PDO('mysql:host=localhost;dbname=lajmet','RitaM','Ritarita123');
            $this->pdo=$link;
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
    }
}

?>