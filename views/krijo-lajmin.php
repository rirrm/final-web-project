<?php 
    require_once '../LajmiController.php';
    


    $lajmi = new LajmiController;
    if(isset($_POST['Submit'])){
        $lajmi->insert($_POST);
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
<div class="center" id="cntr">
    <h1>Krijo lajmin</h1>
    <form method="POST"> 
    <div class="txt_field">
        <input type="text" name="titulli">
        <span></span>
        <label for="titulli">Titulli</label>
        </div>
        
        <div class="txt_field">
        <input type="file" name="foto">
        <span></span>
        </div>

        <textarea name="pershkrimi" rows="10" cols="70" placeholder="Shkruani pershkrimin..."class="ph"></textarea>
        <input type="Submit" name="Submit" value="Save" id="button">
    </form>
</div>

</div>

