<?php
require_once "config/database.php";
class kontaktController 
{
   
    public $db;
    private $query;

    public function __construct()
    {
        $this->db=new Database;
       
    }

   public function insertKontaktin(\Kontakti $kontakt)
   {
    $query =$this->db->pdo->prepare("INSERT into kontakti (emri, mbiemri, mesazhi) values (:emri,:mbiemri,:mesazhi)");
       $emri = $kontakt->getEmri();
       $mbiemri = $kontakt->getMbiemri();
       $mesazhi = $kontakt->getMesazhi();
    $query->bindParam(":emri", $emri);
       $query->bindParam(":mbiemri", $mbiemri);
       $query->bindParam(":mesazhi", $mesazhi);
       $query->execute();
   }

   public function getAllKontaktet()
   {
    $query =$this->db->pdo->query("SELECT * from kontakti");

    return $query->fetchAll();
   }

   public function deleteKontaktin($kontaktId)
   {
    $query =$this->db->pdo->prepare("DELETE from kontakti where Id=:id");
    $query->bindParam(":id", $kontaktId);
    $query->execute();
        return header('Location: dashboard.php');
   }
}
?>