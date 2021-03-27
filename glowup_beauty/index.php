<?php
session_start();
error_reporting(0);
include('includes/config.php');

?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home|GlowUp</title>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="styles/home.css">
	 
	 
    <link rel="icon" href="images/gu.jpg"/>
</head>
<body>
	<?php include('includes/head.php');?>

	<div class="about_us">
        <img src="images/Glow up3.jpg" width=100%>
    </div>
    <section class="page-section bg-light">
        <div class="container">
            <div class="text-center"><center>
                <h2 class="section-heading text-uppercase">Our Amazing Brands</h2>
                <h3 class="section-subheading text-muted">Best Brand Best Quality</h3>
            </center></div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/mayb.jpg" alt="" />
                        <h4>Maybelline</h4>
                        
                        <a class="btn btn-dark btn-social rounded-circle mx-2" href="https://twitter.com/maybelline"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social rounded-circle mx-2" href="https://www.facebook.com/maybelline"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social rounded-circle mx-2" href="https://www.instagram.com/maybelline/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/lakme-logo-new_tcm1255-515879.webp" alt="" />
                        <h4 class='name'>Lakme</h4>
                        
                        <a class="btn btn-dark btn-social rounded-circle mx-2" href="https://twitter.com/ilovelakme"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social rounded-circle mx-2" href="https://www.facebook.com/lakme"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social rounded-circle mx-2" href="https://www.instagram.com/lakmeindia/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/mac.jpg" alt="" />
                        <h4>Mac</h4>
                        
                        <a class="btn btn-dark btn-social rounded-circle mx-2" href="https://twitter.com/maccosmectics"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social rounded-circle mx-2" href="https://www.facebook.com/maccosmeticsindia/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social rounded-circle mx-2" href="https://www.instagram.com/maccosmeticsindia/?hl=en"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/smash1.png" alt="" />
                        <h4>Smashbox</h4>
                        
                        <a class="btn btn-dark btn-social rounded-circle mx-2" href="https://twitter.com/smashbox"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social rounded-circle mx-2" href="https://www.facebook.com/SmashboxCosmetics/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social rounded-circle mx-2" href="https://www.instagram.com/smashboxcosmetics/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/download.png" alt="" />
                        <h4>Nivea</h4>
                        
                        <a class="btn btn-dark btn-social rounded-circle mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social rounded-circle mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social rounded-circle mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="images/loreal.png" alt="" />
                        <h4>L'oreal</h4>
                        
                        <a class="btn btn-dark btn-social  rounded-circle mx-2" href="https://twitter.com/loreal"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social rounded-circle mx-2" href="https://www.facebook.com/lorealindia/?brand_redir=499580396772295"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social  rounded-circle mx-2" href="https://www.instagram.com/loreal/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center"><center>
                <h2 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted">Customer Friendly</h3>
            </center> </div>
            <div class="row text-center">
                <div>
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x "></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Delivery At Door Step</h4>
                    <p class="text-muted">We provide our customers the safest delivery</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Trusted Brands</h4>
                    <p class="text-muted">Our customers enjoy top brands at an affordable price </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Geniune produts</h4>
                    <p class="text-muted">We sell the products that are 100% safe and are of great quality</p>
                </div>
            </div>
        </div>
    </section> 

<footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left">Copyright &copy; GLOWUP 2020</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <a class="mr-3" href="#!">Privacy Policy</a>
                    <a href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
	</footer>
	</body>
</html>
