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
                    <div class="p"><img src="images/beauty of joseon 19.99-Beauty of Joseon Glow Serum Proplis & Niacinamide.jpg" class="k"><div class="pershkrimi">Beauty of Joseon Glow Serum Proplis & Niacinamide<br><b>19.99€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/beauty of joseon 20.00-Beauty of Joseon Relief Sun Rice + Probiotics 50ml.jpg" class="k"><div class="pershkrimi">Beauty of Joseon Relief Sun Rice + Probiotics 50ml<br><b>20.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/missha 2.80-MISSHA Airy Fit Sheet Mask.jpg" class="k"><div class="pershkrimi">MISSHA Airy Fit Sheet Mask<br><b>2.80€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/missha 15.00-Missha Perfect Cover BB Cream 23.jpg"class="k"><div class="pershkrimi">Missha Perfect Cover BB Cream 23<br><b>15.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    </div>
                    <div class="rreshti">
                    <div class="p"><img src="images/beauty of joseon-Beauty of Joseon GLOW DEEP SERUM RICE + ALPHA ARBUTIN.jpg" class="k"><div class="pershkrimi">Beauty of Joseon GLOW DEEP SERUM RICE + ALPHA ARBUTIN<br><span class="zbritja">19.99€</span> <b>17.59€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/aloe.jpeg" class="k"><div class="pershkrimi">ALOE REAL COOL SOOTHING GEL<br><span class="zbritja">7.50€</span> <b>6.75€</b></div><a href="login.html"><button class="blej"></19.99>JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/purito 9.00 ose 6.30-JEJU Volcanic Scoria Konjac Sponge.jpg" class="k"><div class="pershkrimi">JEJU Volcanic Scoria Konjac Sponge<br><span class="zbritja">9.00€ </span><b>6.30€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/laneige 17.00-LIP SLEEPING MASK (MINT CHOCO).jpg" class="k"><div class="pershkrimi">LIP SLEEPING MASK (MINT CHOCO)<br><b>17.00€</b><p></p></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    </div>
                    <div class="rreshti">
                        <div class="p"><img src="images/missha 22.50-Missha All-around Safe Block Soft Finish Sun Milk.jpg" class="k"><div class="pershkrimi">Missha All-around Safe Block Soft Finish Sun Milk<br><b>22.50€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        <div class="p"><img src="images/cosrx 6.00-ACNE PIMPLE MASTER PATCH 24pcs.jpg"class="k"><div class="pershkrimi">ACNE PIMPLE MASTER PATCH 24pcs<br><b>6.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        <div class="p"><img src="images/laneige 20.00-Laneige Lip Sleeping Mask EX Grapefruit 20gr.jpeg" class="k"><div class="pershkrimi">Laneige Lip Sleeping Mask EX Grapefruit 20gr<br><b>20.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        <div class="p"><img src="images/missha 3.50-MISSHA Mascure Moisture Solution Sheet Mask Ceramide.jpg" class="k"><div class="pershkrimi">MISSHA Mascure Moisture Solution Sheet Mask Ceramide<br><b>3.50€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                     </div>
                    <div class="rreshti">
                    <div class="p"><img src="images/carmex 3.00-CARMEX CLASSIC JAR.jpg" class="k"><div class="pershkrimi">CARMEX CLASSIC JAR<br><b>3.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/missha 14.50-Missha All Around Safe Block Daily Sun SPF50+ PA++++ 50ml.jpg" class="k"><div class="pershkrimi">Missha All Around Safe Block Daily Sun SPF50+ PA++++ 50ml<br><b>14.50€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/carmex 3.20ose2.56-CARMEX PREMIUM LIME STICK SPF 15.jpg"class="k"><div class="pershkrimi">CARMEX PREMIUM LIME STICK SPF 15<br><span class="zbritja">3.20€ </span> <b>2.56€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/missha 2.80-Missha Air Fit Sheet Mask Poemgranate.jpg" class="k"><div class="pershkrimi">Missha Air Fit Sheet Mask Poemgranate<br><b>2.80€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    </div>
                    <div class="rreshti">
                    <div class="p"><img src="images/cosrx 14.00-COSRX LOW PH GOOD MORNING CLEANSER.jpg" class="k"><div class="pershkrimi">COSRX LOW PH GOOD MORNING CLEANSER<br><b>14.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/cosrx 15.50-COSRX Aloe Soothing Sun Cream Spf 50+ Pa+++ 50ml.jpg" class="k"><div class="pershkrimi">COSRX Aloe Soothing Sun Cream Spf 50+ Pa+++ 50ml<br><b>15.50€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/Fermented Complex 94 Boosting Essence.jpg"class="k"><div class="pershkrimi">Fermented Complex 94 Boosting Essence<br><b>24.50€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    <div class="p"><img src="images/beauty of joseon 21.99-Beauty of Joseon Dynasty Cream.jpg"class="k"><div class="pershkrimi">Beauty of Joseon Dynasty Cream<br><b>21.99€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    </div>
                     <div class="rreshti">
                        <div class="p"><img src="images/benton 3.50 ose 2.62-BENTON SNAIL BEE HIGH CONTENT MASK PACK.jpg" class="k"><div class="pershkrimi">BENTON SNAIL BEE HIGH CONTENT MASK PACK<br><span class="zbritja">3.50€</span> <b>2.62€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        <div class="p"><img src="images/benton-SHEA BUTTER & COCONUT BODY LOTION.jpg" class="k"><div class="pershkrimi">SHEA BUTTER & COCONUT BODY LOTION<br><b>24.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        <div class="p"><img src="images/somebymi 13.00-SOME BY MI AHA-BHA-PHA 30 DAYS MIRACLE CLEANSING BAR.jpg" class="k"><div class="pershkrimi">SOME BY MI AHA-BHA-PHA 30 DAYS MIRACLE CLEANSING BAR<br><b>13.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        <div class="p"><img src="images/etude house 6.00-Etude House My Beauty Tool Pimple Popper.jpg" class="k"><div class="pershkrimi">Etude House My Beauty Tool Pimple Popper<br><b>6.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        </div>
                    <div class="rreshti">
                        <div class="p"><img src="images/etude house 12.50-ETUDE MY LASH SERUM.jpg" class="k"><div class="pershkrimi">ETUDE MY LASH SERUM<br><b>12.50€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        <div class="p"><img src="images/benton-SNAIL BEE HIGH CONTENT SKIN.jpg" class="k"><div class="pershkrimi">SNAIL BEE HIGH CONTENT SKIN<br><b>20.00€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        <div class="p"><img src="images/carmex 3.20-CARMEX PREMIUM VANILLA STICK SPF 15.jpg" class="k"><div class="pershkrimi">CARMEX PREMIUM VANILLA STICK SPF 15<br><b>3.20€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                        <div class="p"><img src="images/etude house 7.50-Etude Dear Darling Water Gel Tint PK004.jpg" class="k"><div class="pershkrimi">Etude Dear Darling Water Gel Tint PK004<br><b>7.50€</b></div><a href="login.html"><button class="blej">JOIN THE WAITLIST</button></a></div>
                    </div>
            </div> 
-->

<div id="all">
    <?php 
        $produktet = new ProdController;
        $all = $produktet->readData();
        $counter = 0;
        foreach ($all as $product) {
            if ($counter % 4 == 0) {
                echo '<div class="rreshti">';
            }
            echo '<div class="p"><img src="' . $product["prod_foto"] . '" class="k"><div class="pershkrimi">' . $product["prod_pershkrimi"] . '<br><b>' . $product["prod_cmimi"] . '€</b></div><a href="login.php"><button class="blej">JOIN THE WAITLIST</button></a></div>';
            $counter++;
            if ($counter % 4 == 0) {
                echo '</div>';
            }
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