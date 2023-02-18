<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Document</title>
</head>
<body>

<?php 
include "header.php";  
include 'controllers/LajmiController.php';
?>
<main>
       
       
    <!-- <div id="lajmet">
        <div id="lajmibox">
<div class="lajmi"><div class="ph2"><img src=""></div></div>
<div class="lajmi"><div class="ph2"><img src=""></div></div>
</div>
</div> -->
         
<div id=lajmet>
    <div id="lajmibox">
<?php 
        $lajmet = new LajmiController;
        $all = $lajmet->readData();
        for($i=0;$i<count($all);$i++){
            echo'<div class="lajmi">'.$all[$i]["lajmi_titulli"].'<div class="ph"><img class="lajmi-image" src="'.$all[$i]["lajmi_foto"].'"></div>'.$all[$i]["lajmi_pershkrimi"].'</div>';
        }
        ?>
</div>
    </div>
</main>
   <?php 
    include "footer.php";  
?>
</body>
</html>