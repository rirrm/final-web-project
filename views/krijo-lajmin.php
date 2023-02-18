<?php 
    require_once '../controllers/LajmiController.php';

    $lajmi = new LajmiController;
    if(isset($_POST['Submit'])){
        $lajmi->insert($_POST);
    }

?>

<div>
    <form method="POST"> 
        Titulli:
        <input type="text" name="titulli">
        <br>
        Foto:
        <input type="file" name="foto">
        <br>
        Pershkrimi:
        <textarea name="pershkrimi"cols="30" rows="10"></textarea>
        <br>
        <input type="Submit" name="Submit" value="Save">
    </form>
</div>