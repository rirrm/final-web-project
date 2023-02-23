<?php
require_once __DIR__ . "/../config/database.php";

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
        $query = $this->db->pdo->prepare("SELECT * from user where userID=:id");
        // $statement = $this->conn->prepare($this->query);
        $query->bindParam(":id", $userId);
        $query->execute();
         $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
   
    public function getUserByUsername($username)
    {
        $query =$this->db->pdo->prepare("SELECT * from user where username=:username");
        // $statement = $this->conn->prepare($this->query);
        $query->bindParam(":username", $username);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    
    // public function LogIn($username,$password){
    //     $query=$this->db->pdo->prepare("SELECT * from user where username=$username");
    //     $row=mysqli_fetch_assoc($query);

    //     if(mysqli_num_rows($query)>0){
    //         if($password=$row["password"]){
    //             alert("Jeni bere log in me sukses!")
    //         }
    //         else{
    //             alert("Password eshte gabim!");
    //         }
    //     }
    //     else{
    //         alert("Ky username nuk ekziston!");
    //     }
    //     }
    public function getAllUsers()
    {
        $query =$this->db->pdo->prepare("SELECT * from user");
        // $statement = $this->conn->prepare($this->query);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllSimpleUsers()
    {
        $query =$this->db->pdo->prepare("SELECT * from user where role=0");
        // $statement = $this->conn->prepare($this->query);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllAdmins()
    {
        $query =$this->db->pdo->prepare("SELECT * from user where role=1");
        // $statement = $this->conn->prepare($this->query);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insertUser(\Person $user)
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

    public function edit(\Person $user, $id)
    {
        $query =$this->db->pdo->prepare("UPDATE user set username=:username, email=:email, userpassword=:userpassword where UserID=:id");
        var_dump($user);
        // $statement = $this->conn->prepare($this->query);
        $email = $user->getEmail();
        $username = $user->getUsername();
        $userpassword = password_hash($user->getPassword(), PASSWORD_BCRYPT);
        $query->bindParam(":email", $email);
        $query->bindParam(":username", $username);
        $query->bindParam(":userpassword", $userpassword);
        $query->bindParam(":id", $id);
        $query->execute();
    }

    public function makeUserAdmin($userID) {
        $query =$this->db->pdo->prepare("UPDATE user SET role = 1 WHERE userID = :userID");
        $query->bindParam(':userID', $userID);
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

    public function countUsers()
    {
        $stmt = $this->db->pdo->prepare('SELECT COUNT(*) FROM user');
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public function emailExists($email)
    {
        $stmt = $this->db->pdo->prepare("SELECT COUNT(*) FROM user WHERE email = ?");
        $stmt->execute([$email]);

        return $stmt->fetchColumn() > 0;
    }

    
    public function usernameExists($username)
    {

        $stmt = $this->db->pdo->prepare("SELECT COUNT(*) FROM user WHERE username = ?");
        $stmt->execute([$username]);

        return $stmt->fetchColumn() > 0;
    }
    
}
