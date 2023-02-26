<?php 
    require_once '../LajmiController.php';

    session_start();
    if((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && $_SESSION['role'] == 0) || !(isset($_SESSION['loggedin']))){
        header("location: ../index.php");
        exit;
    }

    $lajmi = new LajmiController;
    if(isset($_GET['id'])){
        $lajmiId = $_GET['id'];
    }

    $currentLajm = $lajmi ->edit($lajmiId);

    if(isset($_POST['Submit'])){
        $lajmi->update($_POST,$lajmiId);
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
    <h1>Edito lajmin</h1>
    <form method="post"> 
        
        <div class="txt_field">
        <input type="text" name="titulli" value="<?php echo $currentLajm['lajmi_titulli'];?>">
        <span></span>
        <label for="titulli">Titulli</label>
        </div>
        <div class="txt_field">
        <input type="file" name="foto" value="<?php echo $currentLajm['lajmi_foto'];?>">
        <span></span>
        </div>
        <div class="txt_field">
        <input type="text" name="pershkrimi" value="<?php echo $currentLajm['lajmi_pershkrimi'];?>">
        <span></span>
        <label for="pershkrimi">Pershkrimi</label>
        </div>
        <input type="Submit" name="Submit" value="Update">
    </form>
</div>
</div>
<style>
