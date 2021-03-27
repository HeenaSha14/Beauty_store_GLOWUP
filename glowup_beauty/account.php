<?php
session_start();
include('includes/config.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts|GlowUp</title>
    <link rel="stylesheet" href="styles/account.css">
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
            <li><a href="products.php">PRODUCTS</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <?php 
                if(!isset($_SESSION['username']))
                {?>
                    <li><a href="account.php">ACCOUNTS</a></li>
                    
                <?php    }
                else{
                ?>
                    <li ><a href="logout.php">LOGOUT</a></li>
                    <ul class="nav-user">
                    <li class="active"><a href="cartss.php"><i class="fas fa-shopping-cart"></i>
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
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Log In</button>
            <button type="button" class="toggle-btn" onclick="register()">Register</button>
        </div>
        <div class="name"><strong>GlowUp</strong></div>
        <form id="login" class="input-group" action="login.php" method="POST">
            <input type="text"class="input-field" name="username" placeholder="User Name" required>
            <input type="password"class="input-field" name="passwords" placeholder="Password" required>&nbsp;&nbsp;
            &nbsp;&nbsp; <button type="submit" class="submit-btn" name="submit-login" position="15px">LOGIN</button>
        </form>
        <form id="register" class="input-group" action="register.php" method="POST">
            <input type="text"class="input-field" name="username" placeholder="User Name" required>
            <input type="password"class="input-field" name="passwords" placeholder="Password" required>
            <input type="email"class="input-field" name="email" placeholder="Email Id" required>
            <input type="number" class="input-field" name="phone" placeholder="Phone" pattern="[0-9]{10}" required>
            <input type="radio" class="gender-field" value="Male" name="gender"><span>Male</span>&nbsp;&nbsp;&nbsp;
            <input type="radio" class="gender-field" value="Female" name="gender"><span>Female</span>
            <button type="submit" class="submit-btn">REGISTER<br></button>
        </form>
    </div>
    <script>
        var x= document.getElementById("login");
        var y= document.getElementById("register");
        var z= document.getElementById("btn");
        function register(){
            x.style.left="-400px"
            y.style.left="50px"
            z.style.left="100px"
        }
        function login(){
            x.style.left="50px"
            y.style.left="450px"
            z.style.left="0px"
        }
    </script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    
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
</html>