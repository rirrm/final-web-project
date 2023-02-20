<?php 
    require_once '../homeController.php';

    $prod = new homeController;
    if(isset($_GET['id'])){
        $prodId = $_GET['id'];
    } 
    
    $currentProd = $prod ->edit($prodId);

    if(isset($_POST['Submit'])){
        $prod->update($_POST,$prodId);
    }

?>

<div>
<form method="POST"> 
        Foto:
        <input type="file" name="foto" value="<?php echo $currentProd['home_image'];?>">
        <br>
        Pershkrimi:
        <input type="text" name="emri" value="<?php echo $currentProd['home_emri'];?>">
        <br>
        <input type="Submit" name="Submit" value="Update">
</form>
</div>