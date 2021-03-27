<?php
session_start();
include('includes/config.php');

$c_id="select * from products where "

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products|GlowUp</title>
    <link rel="stylesheet" href="styles/products.css">
    <link rel="icon" type="image/x-icon" href="images/gu.jpg" />
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
</head>
<header>
    <nav>
    <div class="logo">
        <a href="#"><img src="images/glowup.png" width="200px"></a>
    </div>
        <ul class="nav-links">
            <li><a href="index.php">HOME</a></li>
            <li class="active"><a href="products.php">PRODUCTS</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <?php 
                if(!isset($_SESSION['username']))
                {?>
                    <li><a href="account.php">ACCOUNTS</a></li>
                    
                <?php    }
                else{
                ?>
                    <li><a href="logout.php">LOGOUT</a></li>
                    <ul class="nav-user">
                    <li><a href="cartss.php"><i class="fas fa-shopping-cart"></i>
                    <?php 
                            echo $_SESSION['username'];
                }?></a>
        </ul>
        <div class="burger"> 
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <script src="app.js"></script>
</header>
<body>
    <section class="page-section bg-light" id="portfolio">
            <div class="row">
                <div class="col-lg-7 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="eyeshadow.php" >
                        
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="images/ee.jpg"  alt="" />
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-7 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link"  href="eyeliner.php">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="images/eye.jpg" alt="" />
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-7 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link"  href="foundation.php">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="images/ff.jpg" alt="" />
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-7 col-sm-6 mb-4 mb-lg-0">
                    <div class="portfolio-item">
                        <a href="lip.html"></a>
                        <a class="portfolio-link" href="lipstick.php">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="images/ll.jpg"  alt="" />
                        </a>
                       
                    </div>
                </div>
                <div class="col-lg-7 col-sm-6 mb-4 mb-sm-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="moisturizer.php">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="images/mm.jpg" alt="" />
                        </a>

                    </div>
                </div>
                <div class="col-lg-7 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link"  href="essentials.php">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="images/ot.jpg" alt="" />
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    


<footer class="foot">
        <div class="row align-items-center">
            <div class="col-lg-5 ">Copyright &copy; GLOWUP 2020</div>
            <div class="col-lg-4 ">
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col-lg-6 ">
                <a class="mx" href="#!">Privacy Policy</a>
                <a href="#!">Terms of Use</a>
            </div>
        </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>