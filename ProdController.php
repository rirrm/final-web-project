<?php

require_once 'config/database.php';

class ProdController
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function readData()
    {
        $query = $this->db->pdo->query('SELECT * FROM produkti');

        return $query->fetchAll();
    }

    public function insert($request)
    {
        $request['foto'] = './images/' . $request['foto'];
        $query = $this->db->pdo->prepare('INSERT INTO produkti (prod_pershkrimi, prod_foto, prod_cmimi) 
            VALUES(:prod_pershkrimi, :prod_foto, :prod_cmimi)');
        $query->bindParam(':prod_pershkrimi', $request['pershkrimi']);
        $query->bindParam(':prod_foto', $request['foto']);
        $query->bindParam(':prod_cmimi', $request['cmimi']);
        $query->execute();

        return header('Location: dashboard.php');
    }

    public function edit($id)
    {
        $query = $this->db->pdo->prepare('SELECT * FROM produkti WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id)
    {
        $request['foto'] = './images/' . $request['foto'];
        $query = $this->db->pdo->prepare('UPDATE produkti SET prod_pershkrimi = :prod_pershkrimi, prod_foto = :prod_foto, prod_cmimi = :prod_cmimi WHERE id = :id');
        $query->bindParam(':prod_pershkrimi', $request['pershkrimi']);
        $query->bindParam(':prod_foto', $request['foto']);
        $query->bindParam(':prod_cmimi', $request['cmimi']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: dashboard.php');
    }

    public function delete($id)
    {
        $query = $this->db->pdo->prepare('DELETE FROM produkti WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: dashboard.php');
    }
}
?>
