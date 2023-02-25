<?php 
    require_once '../new/userMapper.php';
    require_once '../new/registerController.php';

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
    <h1>Krijo adminin</h1>
<form method="POST"> 
<div class="txt_field">
<input type="text" name="register-emailaddress">
    <span></span>
        <label for="register-emailaddress">Email</label>
        </div>

    <div class="txt_field">
    <input type="text" name="register-username">
    <span></span>
        <label for="register-username">Username</label>
        </div>

    <div class="txt_field">
    <input type="password" name="register-password">
    <span></span>
        <label for="password">Password</label>
        </div>
    <input type="submit" name="Submit" value="Save" id="button">
</form>

  