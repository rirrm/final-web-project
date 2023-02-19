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
include 'LajmiController.php';
?>
<main>



<div class=lajmet>
    <div class="lajmibox">
    <div class="lajmi"><div class="ph"><img class="lajmi-image" src=""></div></div>
    <div class="lajmi"><div class="ph"><img class="lajmi-image" src=""></div></div>
 <div class="lajmi"><div class="ph"><img class="lajmi-image" src=""></div></div>
 
</div>
    </div> 
    <div class=lajmet>
    <div class="lajmibox">
 <div class="lajmi"><div class="ph"><img class="lajmi-image" src=""></div></div>
 <div class="lajmi"><div class="ph"><img class="lajmi-image" src=""></div></div>
    <div class="lajmi"><div class="ph"><img class="lajmi-image" src=""></div></div>
</div>
    </div> 
    <div class=lajmet>
    <div class="lajmibox">
 <div class="lajmi"><div class="ph"><img class="lajmi-image" src=""></div></div>
 <div class="lajmi"><div class="ph"><img class="lajmi-image" src=""></div></div>
    <div class="lajmi"><div class="ph"><img class="lajmi-image" src=""></div></div>
</div>
</div> 
 

<?php 
    $lajmet = new LajmiController;
    $all = $lajmet->readData();
    $counter =0;
    foreach($all as $lajmi){
        if($counter % 4 == 0){
            echo '<div class="lajmet">';
            echo '<div class="lajmibox">';
        }
        echo '<div class="lajmi"><div class="ph"><img class="lajmi-image" src="'.$lajmi["lajmi_foto"].'"></div>'.$lajmi["lajmi_titulli"].$lajmi["lajmi_pershkrimi"].'</div>';
        if ($counter % 4 == 0) {
            echo '</div></div>';
        }
    }
    if ($counter % 4 != 0) {
        echo '</div></div>';
    }
    ?>

</main>
   <?php 
    include "footer.php";  
?>
</body>
</html>