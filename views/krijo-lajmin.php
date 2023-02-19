<?php 
    require_once '../LajmiController.php';

    $lajmi = new LajmiController;
    if(isset($_POST['Submit'])){
        $lajmi->insert($_POST);
    }
?>

<div id="lajmet">
    <div id="lajmibox">

    <div class="lajmi">
    <form method="POST"> 
        Titulli:
        <input type="text" name="titulli">
        <br>
        Foto:
        <input type="file" name="foto">
        <br>
        Pershkrimi:
        <textarea name="pershkrimi"cols="30" rows="10" class="ph"></textarea>
        <br>
        <input type="Submit" name="Submit" value="Save">
    </form>
</div>

</div>
</div>

<style>
    
.ph{
  height:300px;
  width:300px;
  background-color: #0b5d47;
  margin-top: 30px;
  margin-left: 25px;
}

.lajmi{
    height:500px;
    width:350px;
    background-color: #fff;
    justify-content: space-between;
}

#lajmibox{
    height:500px;
    width:33.3cm;
    display:flex;
    flex-direction:initial;
    align-items: center;
    justify-content: space-around;
   
}

#lajmet{
    margin-top:70px;
    background-color: #e9e8e4;
    width: 83%;
    margin-left: 5%;
    height: 500px;
    text-align: center;
    border-radius: 10px;
    padding: 50px 50px;
    margin-bottom:100px;
}
    </style>