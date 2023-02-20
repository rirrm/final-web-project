<?php
    require_once 'config/database.php';

    class homeController{
        public $db;

        public function __construct(){
            $this->db=new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * from home');

            return $query->fetchAll();
        }

        public function insert($request){
            $request['foto']='./images/'.$request['foto'];
            $query=$this->db->pdo->prepare('INSERT INTO home (home_image,home_emri)
            VALUES(:home_image,:home_emri)');

            $query->bindParam(':home_image',$request['foto']);
            $query->bindParam(':home_emri',$request['emri']);
            $query->execute();

            return header('Location: dashboard.php');
        }

        public function edit($id){
            $query =$this->db->pdo->prepare('SELECT * FROM home WHERE id = :id');
            $query->bindParam(':id',$id);
            $query->execute();

            return $query->fetch();
        }

        public function update($request,$id){
            $request['foto']='./images/'.$request['foto'];
            $query=$this->db->pdo->prepare('UPDATE lajmi SET home_image = :home_image,
            home_emri = :home_emri
            WHERE id =:id');
            $query->bindParam(':home_image',$request['foto']);
            $query->bindParam(':lajmi_foto',$request['emri']);
            $query->bindParam(':id',$id);
            $query->execute();

            return header('Location: dashboard.php');
        }

        public function delete($id){
            $query =$this->db->pdo->prepare('DELETE FROM home WHERE id=:id');
            $query->bindParam(':id',$id);
            $query->execute();

            return header('Location: dashboard.php');
        }

    }
?>