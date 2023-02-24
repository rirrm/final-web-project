<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Navigo</h4>
                    <ul>
                        <li><a href="index.php">Faqja Kryesore</a></li>
                        <li><a href="products.php">Produktet</a></li>
                        <li><a href="aboutUs.php">Rreth nesh</a></li>
                        <li><a href="news.php">Të rejat</a></li>
                    </ul>
                </div>
                
                <div class="footer-col" id="contact">
                    <h4>Na kontaktoni</h4>
                    <ul>
                        <li>Biznesi + Partneritetet: brand@haneul.com</li>
                        <li>Press: press@haneul.com</li>
                        <li>Numri Kontaktues: +38349900900</li>
                        <li>HQ Address:Lagjja Kalabria, 10000 Prishtinë, Kosovë</li>
                    </ul>
                </div>

                <div class="footer-col" id="socials">
                    <h4>Na ndiqni</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>

   <style>
    

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');


.container{
	max-width: 100%;
	margin:auto;
    margin-left: 230px;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
.footer-col ul{
	list-style: none;
    margin: 0px;
    padding: 0px;
    color: #f3f3ec;
}
.footer{
	background-color: #13765b;
    padding: 70px 0;
    height: 5cm;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}

#contact{
    margin-right: 70px;
}

#socials{
    margin-left: 70px;
}
.footer-col h4{
	font-size: 18px;
	color: #f3f3ec;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #0b5d47;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #f3f3ec;
	text-decoration: none;
	font-weight: 300;
	color: #f3f3ec;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #f3f3ec;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #f3f3ec;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #f3f3ec;
	background-color: #f3f3ec;
}


@media only screen and (max-width: 768px) {
    .footer{
        height:auto;
    }
    .footer-col {
        width: 50%;
        margin-bottom: 30px;
    }
    .row{
        margin-left: -100px;
    }
    #contact {
        margin-right: 0;
    }
    #socials {
        margin-left: 0;
    }
}

    </style>