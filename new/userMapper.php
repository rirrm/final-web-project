<?php
require_once "../config/database.php";

class UserMapper extends Database
{

    private $db;
    private $query;

    public function __construct()
    {
        $this->db=new Database;
        // $this->conn = $this->getConnection();
    }

    public function getUserByID($userId)
    {
        $query =$this->db->pdo->query("SELECT * from user where userid=:id");
        // $statement = $this->conn->prepare($this->query);
        $query->bindParam(":id", $userId);
        $query->execute();
         $result = $query->fetch();
        return $result;
    }

    public function edit(\SimpleUser $user, $id)
    {
        $query =$this->db->pdo->prepare("UPDATE user set username=:username, email=:email where UserID=:id");
        var_dump($user);
        // $statement = $this->conn->prepare($this->query);
        $email = $user->getEmail();
        $username = $user->getUsername();
        $query->bindParam(":email", $email);
        $query->bindParam(":username", $username);
        $query->bindParam(":id", $id);
        $query->execute();
    }

    public function getUserByUsername($username)
    {
        $query =$this->db->pdo->prepare("SELECT * from user where username=:username");
        // $statement = $this->conn->prepare($this->query);
        $query->bindParam(":username", $username);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }

    public function getAllUsers()
    {
        $query =$this->db->pdo->query("SELECT * from user");
        // $statement = $this->conn->prepare($this->query);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    public function insertUser(\SimpleUser $user)
    {
        $query =$this->db->pdo->prepare("INSERT into user (email, username, userpassword, role) values (:email,:username,:pass,:role)");
        // $statement = $this->conn->prepare($this->query);
        $email = $user->getEmail();
        $username = $user->getUsername();
        $pass = password_hash($user->getPassword(), PASSWORD_BCRYPT);
        $role = $user->getRole();
        $query->bindParam(":email", $email);
        $query->bindParam(":username", $username);
        $query->bindParam(":pass", $pass);
        $query->bindParam(":role", $role);
        $query->execute();
    }

    public function deleteUser($userId)
    {
        $query =$this->db->pdo->prepare("DELETE from user where userID=:id");
        // $statement = $this->conn->prepare($this->query);
        $query->bindParam(":id", $userId);
        $query->execute();
        return header('Location: ../views/dashboard.php');
    }
}
