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

<div id="aboutUs">
        <div id="aboutUs2">
            <div id="aboutUs2Txt">
                <p>Ne ofrojmë produkte të dizajnuara për bukurinë tuaj të vërtetë në mendje. Këtu do të gjeni skincare, makeup, body care dhe parfuma, të gjitha me vlerë për ju.
                Haneul, Inc. u themelua më 2018 me besimin që bukura nuk ndërtohet nga kompanitë-ajo ndodhë kur je pjesë e procesit. Ne filluam me Haneul, një website i bukurisë dedikuar njerëzve që ndajnë produktet që i duan.
                Tani, jemi duke ndërtuar një kompani të bukurisë të së ardhmes, ku gjithçka që bëjmë fillon me ju. Ne besojmë në dizajn të menduar mirë, si dhe në hapje të bisedave të rëndësishme(aty ku fillon gjithçka ). Por më së shumti, ne besojmë që bukuria ka të bëjë me argëtim, kudo që jeni në udhëtimin tuaj.
                Na vjen mirë që po ju takojmë! Tani që jeni këtu, <a href="products.html" id="shiko">shikoni përreth.</a></p>
            </div>
            <div>
                <img src="./images/about.jpg" alt="" id="img">
            </div>
        </div>
 


    <!-- // $lajmet = new LajmiController;
    // $all = $lajmet->readData();
    // $counter =0;
    // foreach($all as $lajmi){
    //     if($counter % 4 == 0){
    //         echo '<div class="lajmet">';
    //         echo '<div class="lajmibox">';
    //     }
    //     echo '<div class="lajmi"><div class="ph"><img class="lajmi-image" src="'.$lajmi["lajmi_foto"].'"></div>'.$lajmi["lajmi_titulli"].$lajmi["lajmi_pershkrimi"].'</div>';
    //     if ($counter % 4 == 0) {
    //         echo '</div></div>';
    //     }
    // }
    // if ($counter % 4 != 0) {
    //     echo '</div></div>';
    // }  -->


</main>
   <?php 
    include "footer.php";  
?>
</body>
</html>