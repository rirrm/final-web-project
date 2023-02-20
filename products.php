<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Produktet</title>
        <link rel="stylesheet" href="css/products.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    </head>
    <body>
        <main>
<?php 
include "header.php"; 
include "ProdController.php"; 
?>
                <!-- <div id="all">
                    <div class="rreshti">
                    <div class="p"><img src="images/1.jpg" class="k"><div class="pershkrimi">Beauty of Joseon Glow Serum Proplis & Niacinamide<br><b>19.99€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/2.jpg" class="k"><div class="pershkrimi">Beauty of Joseon Relief Sun Rice + Probiotics 50ml<br><b>20.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/3.jpg" class="k"><div class="pershkrimi">MISSHA Airy Fit Sheet Mask<br><b>2.80€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/4.jpg"class="k"><div class="pershkrimi">Missha Perfect Cover BB Cream 23<br><b>15.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    </div>
                    <div class="rreshti">
                    <div class="p"><img src="images/5.jpg" class="k"><div class="pershkrimi">Beauty of Joseon GLOW DEEP SERUM RICE + ALPHA ARBUTIN<br><span class="zbritja">19.99€</span> <b>17.59€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/6.jpeg" class="k"><div class="pershkrimi">ALOE REAL COOL SOOTHING GEL<br><span class="zbritja">7.50€</span> <b>6.75€</b></div><a href="login.html"><button class="blej"></19.99>JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/7.jpg" class="k"><div class="pershkrimi">JEJU Volcanic Scoria Konjac Sponge<br><span class="zbritja">9.00€ </span><b>6.30€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/8.jpg" class="k"><div class="pershkrimi">LIP SLEEPING MASK (MINT CHOCO)<br><b>17.00€</b><p></p></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    </div>
                    <div class="rreshti">
                        <div class="p"><img src="images/9.jpg" class="k"><div class="pershkrimi">Missha All-around Safe Block Soft Finish Sun Milk<br><b>22.50€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        <div class="p"><img src="images/10.jpg"class="k"><div class="pershkrimi">ACNE PIMPLE MASTER PATCH 24pcs<br><b>6.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        <div class="p"><img src="images/11.jpeg" class="k"><div class="pershkrimi">Laneige Lip Sleeping Mask EX Grapefruit 20gr<br><b>20.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        <div class="p"><img src="images/12.jpg" class="k"><div class="pershkrimi">MISSHA Mascure Moisture Solution Sheet Mask Ceramide<br><b>3.50€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                     </div>
                    <div class="rreshti">
                    <div class="p"><img src="images/13.jpg" class="k"><div class="pershkrimi">CARMEX CLASSIC JAR<br><b>3.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/14.jpg" class="k"><div class="pershkrimi">Missha All Around Safe Block Daily Sun SPF50+ PA++++ 50ml<br><b>14.50€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/15.jpg"class="k"><div class="pershkrimi">CARMEX PREMIUM LIME STICK SPF 15<br><span class="zbritja">3.20€ </span> <b>2.56€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/16.jpg" class="k"><div class="pershkrimi">Missha Air Fit Sheet Mask Poemgranate<br><b>2.80€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    </div>
                    <div class="rreshti">
                    <div class="p"><img src="images/17.jpg" class="k"><div class="pershkrimi">COSRX LOW PH GOOD MORNING CLEANSER<br><b>14.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/18.jpg" class="k"><div class="pershkrimi">COSRX Aloe Soothing Sun Cream Spf 50+ Pa+++ 50ml<br><b>15.50€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/19.jpg"class="k"><div class="pershkrimi">Fermented Complex 94 Boosting Essence<br><b>24.50€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/20.jpg"class="k"><div class="pershkrimi">Beauty of Joseon Dynasty Cream<br><b>21.99€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    </div>
                     <div class="rreshti">
                        <div class="p"><img src="images/21.jpg" class="k"><div class="pershkrimi">BENTON SNAIL BEE HIGH CONTENT MASK PACK<br><span class="zbritja">3.50€</span> <b>2.62€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        <div class="p"><img src="images/22.jpg" class="k"><div class="pershkrimi">SHEA BUTTER & COCONUT BODY LOTION<br><b>24.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        <div class="p"><img src="images/23.jpg" class="k"><div class="pershkrimi">SOME BY MI AHA-BHA-PHA 30 DAYS MIRACLE CLEANSING BAR<br><b>13.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        <div class="p"><img src="images/24.jpg" class="k"><div class="pershkrimi">Etude House My Beauty Tool Pimple Popper<br><b>6.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        </div>
                    <div class="rreshti">
                        <div class="p"><img src="images/25.jpg" class="k"><div class="pershkrimi">ETUDE MY LASH SERUM<br><b>12.50€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        <div class="p"><img src="images/26.jpg" class="k"><div class="pershkrimi">SNAIL BEE HIGH CONTENT SKIN<br><b>20.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        <div class="p"><img src="images/27.jpg" class="k"><div class="pershkrimi">CARMEX PREMIUM VANILLA STICK SPF 15<br><b>3.20€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        <div class="p"><img src="images/28.jpg" class="k"><div class="pershkrimi">Etude Dear Darling Water Gel Tint PK004<br><b>7.50€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    </div>
            </div>  -->


<div id="all">
    <?php 
        $produktet = new ProdController;
        $all = $produktet->readData();
        $counter = 0;
        $num_prod_teShfaqura = 0;
        foreach ($all as $product) {
            if ($num_prod_teShfaqura == 28) {
                break; 
            }
            if ($counter % 4 == 0) {
                echo '<div class="rreshti">';
            }
            echo '<div class="p"><img src="' . $product["prod_foto"] . '" class="k"><div class="pershkrimi">' . $product["prod_pershkrimi"] . '<br><b>' . $product["prod_cmimi"] . '€</b></div><a href="login.php"><button class="blej">JOIN THE WAITLIST</button></a></div>';
            $counter++;
            if ($counter % 4 == 0) {
                echo '</div>';
            }
            $num_prod_teShfaqura++;
        }
        if ($counter % 4 != 0) {
            echo '</div>';
        }
    ?>
</div>
        </main>
       <?php 
    include "footer.php";  
?>
    </body>
    </html>