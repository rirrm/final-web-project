<?php 
  require_once '../user/userMapper.php';

  session_start();
  if((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && $_SESSION['role'] == 0) || !(isset($_SESSION['loggedin']))){
      header("location: ../index.php");
      exit;
  }
  
  if(isset($_GET['id'])) {
    $userID = $_GET['id'];
    $mapper = new userMapper();
    $mapper->makeAdminUser($userID);
    header('Location: dashboard.php');
    exit;
  }
?>