<?php
    require_once 'config/database.php';

    class LajmiController{
        public $db;

        public function __construct(){
            $this->db=new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * from lajmi');

            return $query->fetchAll();
        }

        public function insert($request){
            $request['foto']='./images/'.$request['foto'];
            $query=$this->db->pdo->prepare('INSERT INTO lajmi (lajmi_titulli,lajmi_foto,lajmi_pershkrimi)
            VALUES(:lajmi_titulli,:lajmi_foto,:lajmi_pershkrimi)');

            $query->bindParam(':lajmi_titulli',$request['titulli']);
            $query->bindParam(':lajmi_foto',$request['foto']);
            $query->bindParam(':lajmi_pershkrimi',$request['pershkrimi']);
            $query->execute();

            return header('Location: dashboard.php');
        }

        public function edit($id){
            $query =$this->db->pdo->prepare('SELECT * FROM lajmi WHERE id = :id');
            $query->bindParam(':id',$id);
            $query->execute();

            return $query->fetch();
        }

        public function update($request,$id){
            $request['foto']='./images/'.$request['foto'];
            $query=$this->db->pdo->prepare('UPDATE lajmi SET lajmi_titulli = :lajmi_titulli,
            lajmi_foto = :lajmi_foto, lajmi_pershkrimi=:lajmi_pershkrimi
            WHERE id =:id');
            $query->bindParam(':lajmi_titulli',$request['titulli']);
            $query->bindParam(':lajmi_foto',$request['foto']);
            $query->bindParam(':lajmi_pershkrimi',$request['pershkrimi']);
            $query->bindParam(':id',$id);
            $query->execute();

            return header('Location: dashboard.php');
        }

        public function delete($id){
            $query =$this->db->pdo->prepare('DELETE FROM lajmi WHERE id=:id');
            $query->bindParam(':id',$id);
            $query->execute();

            return header('Location: dashboard.php');
        }

    }
?>