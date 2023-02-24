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

<?php 
$lajmet = new LajmiController;
$all = $lajmet->readData();
$num_lajmeve_teShfaqura = 0;

foreach($all as $lajmi){
    if ($num_lajmeve_teShfaqura == 4) {
        break; 
    }

    echo '<div class="aboutUs"><div class="aboutUs2">
        <div class="aboutUs2Txt">
            <h3>'.$lajmi["lajmi_titulli"].'</h3>
            <p>'.$lajmi["lajmi_pershkrimi"].'</p>
        </div>
        <div >
            <img class="img" src="'.$lajmi["lajmi_foto"].'">
        </div>
    </div>
    </div>';

    $num_lajmeve_teShfaqura++;
}
?>



</main>
   <?php 
    include "footer.php";  
?>
</body>
</html>