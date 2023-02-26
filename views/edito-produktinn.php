<?php 
    require_once '../homeController.php';

    session_start();
    if((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && $_SESSION['role'] == 0) || !(isset($_SESSION['loggedin']))){
        header("location: ../index.php");
        exit;
    }

    $prod = new homeController;
    if(isset($_GET['id'])){
        $prodId = $_GET['id'];
    } 
    
    $currentProd = $prod ->edit($prodId);

    if(isset($_POST['Submit'])){
        $prod->update($_POST,$prodId);
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
    <h1>Edito arritjen e re</h1>
    <form method="POST"> 

    <div class="txt_field">
    <input type="file" name="foto" value="<?php echo $currentProd['home_image'];?>">
        <span></span>
        </div>

    <div class="txt_field">
    <input type="text" name="emri" value="<?php echo $currentProd['home_emri'];?>">
        <span></span>
        <label for="pershkrimi">Pershkrimi</label>
        </div>

        <input type="Submit" name="Submit" value="Update">
    </form>
</div>
</div>
</body>
</html>
<div>