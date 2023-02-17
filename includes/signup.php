<?php 

if (isset($_POST["login-btn"])){
    //pi merr te dhenat
    $emailaddress=$_POST["emailaddress"];
    $username=$_POST["username";]
    $password=$_POST["password";]

    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignUpContr($emailaddress,$username,$password);
}