<?php
require_once "databaseConfig.php";
class kontaktController extends DatabasePDOConfiguration
{
    private $db;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }
    
   public function insertKontaktin(\Kontakti $kontakt)
   {
       $this->query = "INSERT into kontakti (emri, mbiemri, mesazhi) values (:emri,:mbiemri,:mesazhi)";
       $statement = $this->conn->prepare($this->query);
       $emri = $kontakt->getEmri();
       $mbiemri = $kontakt->getMbiemri();
       $mesazhi = $kontakt->getMesazhi();
       $statement->bindParam(":emri", $emri);
       $statement->bindParam(":mbiemri", $mbiemri);
       $statement->bindParam(":mesazhi", $mesazhi);
       $statement->execute();
   }
}


?>