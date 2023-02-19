<?php 
    require_once '../ProdController.php';

    $prod = new ProdController;
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
        Pershkrimi:
        <input type="text" name="pershkrimi" value="<?php echo $currentProd['prod_pershkrimi'];?>">
        <br>
        Foto:
        <input type="file" name="foto" value="<?php echo $currentProd['prod_foto'];?>">
        <br>
        Cmimi:
        <input type="text" name="cmimi" value="<?php echo $currentProd['prod_cmimi'];?>">
        <br>
        <input type="Submit" name="Submit" value="Update">
    </form>
</div>