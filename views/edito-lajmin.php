<?php 
    require_once '../LajmiController.php';

    $lajmi = new LajmiController;
    if(isset($_GET['id'])){
        $lajmiId = $_GET['id'];
    }

    $currentLajm = $lajmi ->edit($lajmiId);

    if(isset($_POST['Submit'])){
        $lajmi->update($_POST,$lajmiId);
    }

?>

<div>
    <form method="post"> 
        Titulli:
        <input type="text" name="titulli" value="<?php echo $currentLajm['lajmi_titulli'];?>">
        <br>
        Foto:
        <input type="file" name="foto" value="<?php echo $currentLajm['lajmi_foto'];?>">
        <br>
        Pershkrimi:
        <input type="text" name="pershkrimi" value="<?php echo $currentLajm['lajmi_pershkrimi'];?>">
        <br>
        <input type="Submit" name="Submit" value="Update">
    </form>
</div>