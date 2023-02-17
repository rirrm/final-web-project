<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
<?php 
    include "header.php";
    
?>
    <main>
        <div id="banner">
            <h3>Gjithmonë produkte të pastra dhe vegane </h3>
        </div>

        <div id="fotoPare">
            <div id="teksti">
                <p>Shfleto produktet më të reja në Haneul!</p>
                <div><a href="products.html"><button id="btn1"><span>Blej tani</span></button></a></div>
            </div>
        <div>
            <img src="images/Zaira-Water_2000x.jpg" alt="" id="foto">
        </div>
        </div>
        
        <div class="katrorat">
        <img name="mySlide" id="slideshow">
        
        </div>


        <div>
            <h1 id="rec">Arritjet e reja</h1>
            <div class="wr">
                <div class="divs"><a href="products.html">
                <img src="images/rice-arabutin.jpg" class="r">
                <p class="tekstet">Beauty of Joseon GLOW DEEP SERUM RICE + ALPHA ARBUTIN </p>
                </a>
            </div>
            <div class="divs"><a href="products.html">
                <img src="images/CLEANSING-BAR.jpg" class="r">
                <p class="tekstet">SOME BY MI AHA-BHA-PHA 30 DAYS MIRACLE CLEANSING BAR</p>
                </a>
            </div>
            <div class="divs"><a href="products.html">
                <img src="images/laneigehome.png" class="r">
                <p class="tekstet">LIP SLEEPING MASK (MINT CHOCO)</p>
                </a>
            </div>
            <div class="divs"><a href="products.html">
                <img src="images/pomegrenate.jpg" class="r">
                <p class="tekstet">Missha Air Fit Sheet Mask Poemgranate</p>
                </a>
                </a>
            </div>
        </div>
        </div>

        <div id="fotoFundit">
            <div>
                <img src="./images/glaze-targets_2000x.jpg" alt="" id="img">
            </div>
            <div id="fotoFunditTxt">
                <h1>Një nga shumë gjëra të mira!</h1>
                <p>Haneul përmban linja esenciale, efikase dhe të qëllimshme për kujdesin e lëkurës. Produktet tona ushqejnë 
                    barrierën e lëkurës tuaj, duke i dhënë shkëlqim të menjëhershëm dhe duke përmirësuar pamjen dhe ndjesinë 
                    e lëkurës me kalimin e kohës</p>
                    <div><a href="aboutUs.html"><button id="btn2"><span>Më trego më shumë</span></button></a></div>
            </div>
        </div>
    </main>
   <?php 
    include "footer.php";  
?>
<script src="javascript/script.js"></script>
</body>
</html>