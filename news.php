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


<div id=all>
<div class=lajmet>
    <div class="lajmibox">
 <div class="lajmi"><div class="ph"><img class="lajmi-image" src=""></div></div>
 
</div>
    </div> 
    <div class=lajmet>
    <div class="lajmibox">
    <div class="lajmi"><div class="ph"><img class="lajmi-image" src=""></div></div>
</div>
    </div> 
    <div class=lajmet>
    <div class="lajmibox">
    <div class="lajmi"><div class="ph"><img class="lajmi-image" src=""></div></div>
</div>
</div> 
</div>
        



<div class="lajmet">
    <?php 
        $lajmet = new LajmiController;
        $all = $lajmet->readData();
        $counter = 0;
        echo '<div class="lajmibox">';
        foreach ($all as $lajmi) {
            echo '<div class="lajmi"><div class="ph"><img class="lajmi-image" src="'.$lajmi["lajmi_foto"].'"></div>'.$lajmi["lajmi_titulli"].$lajmi["lajmi_pershkrimi"].'</div>';
            $counter++;
            if ($counter % 3 == 0) {
                echo '</div><div class="lajmibox">';
            }
        }
        echo '</div>'; 
    ?>
</div>

    
</main>
   <?php 
    include "footer.php";  
?>
</body>
</html>