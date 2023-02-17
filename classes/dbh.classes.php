<?php

class Dbh {

    private function connect(){
        try{
            $username="root";
            $password=""; 
            $dh=new PDO('mysql:host=localhost;dbname=ooplogin',$username,$password);
            return $dbh;      
         }catch(PDOException $e){
            print "Error!:".$e->getMessage()."<br/>";
            die();
         }
    }
}
   

 
