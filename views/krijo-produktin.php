<?php 
    require_once '../ProdController.php';

    $produkti = new ProdController;
    if(isset($_POST['Submit'])){
        $produkti->insert($_POST);
    }

?>

<div id="produktet">
    <div id="produktibox">

    <div class="produkti">
<div>
    <form method="POST"> 
        Pershkrimi:
        <textarea name="pershkrimi"cols="30" rows="10"></textarea>
        <br>
        Foto:
        <input type="file" name="foto">
        <br>
        Cmimi:
        <input type="text" name="cmimi">
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

.produkti{
    height:500px;
    width:350px;
    background-color: #fff;
    justify-content: space-between;
}

#produktibox{
    height:500px;
    width:33.3cm;
    display:flex;
    flex-direction:initial;
    align-items: center;
    justify-content: space-around;
   
}

#produktet{
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