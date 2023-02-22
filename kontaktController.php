<?php
require_once "config/database.php";
class kontaktController 
{
    // private $db;
    public $db;
    private $query;

    public function __construct()
    {
        $this->db=new Database;
        // $this->conn = $this->getConnection();
    }

   public function insertKontaktin(\Kontakti $kontakt)
   {
    // $this->query = "INSERT into kontakti (emri, mbiemri, mesazhi) values (:emri,:mbiemri,:mesazhi)";
    $query =$this->db->pdo->prepare("INSERT into kontakti (emri, mbiemri, mesazhi) values (:emri,:mbiemri,:mesazhi)");
    //    $statement = $this->conn->prepare($this->query);
       $emri = $kontakt->getEmri();
       $mbiemri = $kontakt->getMbiemri();
       $mesazhi = $kontakt->getMesazhi();
    //    $statement->bindParam(":emri", $emri);
    //    $statement->bindParam(":mbiemri", $mbiemri);
    //    $statement->bindParam(":mesazhi", $mesazhi);
    //    $statement->execute();
    $query->bindParam(":emri", $emri);
       $query->bindParam(":mbiemri", $mbiemri);
       $query->bindParam(":mesazhi", $mesazhi);
       $query->execute();
   }

   public function getAllKontaktet()
   {
    //    $this->query = "SELECT * from kontakti";
    //    $statement = $this->conn->prepare($this->query);
    //    $statement->execute();
    //    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    //    return $result;
    $query =$this->db->pdo->query("SELECT * from kontakti");

    return $query->fetchAll();
   }

   public function deleteKontaktin($kontaktId)
   {
    //    $this->query = "DELETE from kontakti where Id=:id";
    $query =$this->db->pdo->prepare("DELETE from kontakti where Id=:id");
    //    $statement = $this->conn->prepare($this->query);
    // $statement->bindParam(":id", $kontaktId);
    // $statement->execute();
    $query->bindParam(":id", $kontaktId);
    $query->execute();
        return header('Location: dashboard.php');
   }
}
?>