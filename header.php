<?php
include_once 'new/adminClass.php';
include_once 'new/simpleUserClass.php';
session_start();
?>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <header>
    <div id="header1">
        <div id="head1">
            <ul>
                <li><a href="index.php" class="hovernav">Home</a></li>
                <li><a href="products.php" class="hovernav">Produktet</a></li>
                <li><a href="aboutUs.php" class="hovernav">Rreth nesh</a></li>
                <li><a href="contactform.php" class="hovernav">Kontakti</a></li>
                <li><a href="news.php" class="hovernav">Të rejat</a></li>
            </ul>
        </div>
        <div>
            <a href="index.php"><img src="images/logo.png" id="img1"></a>
        </div>
        <div id="head2">
            <ul>
                <?php 
                
                if (isset($_SESSION['loggedin'])) { 
                    
                    echo '<li><a href="new/logout.php" class="hovernav">Log Out</a></li>';
                    
                    if ($_SESSION['role'] == 1) { 
                      
                        echo '<li><a href="views/dashboard.php" class="hovernav">Dashboard</a></li>';
                    }
                } else { 
          
                   echo ' <li><a href="login.php" class="hovernav">Kyçu</a></li>';
                 } ?>
            </ul>
        </div>
    </div>
</header>

    <style>
        

a{
    color: #262626;
    text-decoration: none;
}

 
#header1 ul{
    list-style:none;
    display:flex;
    align-items: center;
}
 
#img1{
    width: 3.5cm;
    height: 1.25cm;
    padding-right: 8cm;
}
#header1{
    align-items:center;
    justify-content:space-between;
    height:1.7cm;
    width:100%;
    font-size:17.5px;
    display:flex;
    flex-direction:initial;
    background-color: #f3f3ec;
    position:absolute;
}
#header1 ul li{
    color: #13765b;
    margin-left:32.5px;
    padding: 5px;
}

#header1 a{
    color: #13765b;
}
#head2 ul li{
    margin-right: 50px;
}



.nav ul li a:hover{
    color: rgba(19, 117, 58, 0.911);
    transition: .5s;
}

.hovernav {
    display: inline-block;
    position: relative;
    color: rgba(19, 117, 58, 0.911);
}

.hovernav:after {
    content: '';
    position: absolute;
    width: 100%;
    transform: scaleX(0);
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: rgba(19, 117, 58, 0.911);
    transform-origin: bottom right;
    transition: transform 0.25s ease-out;
  }

.hovernav:hover:after {
    transform: scaleX(1);
    transform-origin: bottom left;
}

@media screen and (max-width: 768px) {
  #header1 {
    flex-wrap: wrap;
    height: auto;
  }
  
  #img1 {
    width: 100%;
    max-width: 150px;
    margin: 0px auto;
    padding-left: 5cm;
    order: 1;
    margin-bottom: -20px;
    display: flex;
  justify-content: center;
  align-items: center;
  }
  
  #head1 {
    justify-content: center;
    width: 100%;
    order: 2;
    margin-bottom: -30px;
  }
  #head1 ul{
    justify-content: center;
  }
  
  #head2 {
    width: 100%;
    order: 3;
    text-align: center;
  }
  
  #head2 ul {
    display: flex;
    justify-content: center;
    margin-bottom: 2px;
  }
  
  #header1 ul li {
    margin: 0 10px;
  }
}




</style>