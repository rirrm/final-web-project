<?php 
    require_once '../homeController.php';

    session_start();
    if((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && $_SESSION['role'] == 0) || !(isset($_SESSION['loggedin']))){
        header("location: ../index.php");
        exit;
    }

    $produkti = new homeController;
    if(isset($_POST['Submit'])){
        $produkti->insert($_POST);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/crud.css">
</head>
<body>
<h2><a href="dashboard.php">Kthehu ne Dashboard</a></h2>
<div class="kufiza">
<div class="center">
    <h1>Krijo arritjen e re</h1>
    <form method="POST"> 
    <div class="txt_field">
        <input type="file" name="foto">
        <span></span>
        </div>
        <textarea name="pershkrimi" rows="10" cols="70" placeholder="Shkruani pershkrimin..."class="ph"></textarea>
        <input type="Submit" name="Submit" value="Save">
    </form>
</div>
</div>
</div>

