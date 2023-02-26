<?php
require_once 'kontaktController.php';


class Kontakti
{
    private $emri="";
    private $mbiemri = "";
    private $mesazhi = "";

    public function __construct($formData)
    {
        $this->emri = $formData['emri'];
        $this->mbiemri = $formData['mbiemri'];
        $this->mesazhi = $formData['subject'];
    }

    public function emptyFields(){
        if(empty($this->emri) || empty($this->mbiemri) || empty($this->mesazhi)){
            return true;
        }
        return false;
    }

    public function validateEmriMbiemri(){
        $emriRegex = "/^[A-Za-z]+$/";
        
        if(preg_match($emriRegex, $this->emri) && preg_match($emriRegex, $this->mbiemri)){
            return true;
        } else {
            return false;
        }
    }

    public function getEmri()
    {
        return $this->emri;
    }
    public function getMbiemri()
    {
        return $this->mbiemri;
    }
    public function getMesazhi()
    {
        return $this->mesazhi;
    }

    
    public function insertData()
    {
        $kontakt = new Kontakti([
            'emri' => $this->emri,
            'mbiemri' => $this->mbiemri,
            'subject' => $this->mesazhi,
        ]);
        
        $controller = new kontaktController();
        $controller->insertKontaktin($kontakt);
        header("Location:index.php");
    }
}
    ?>