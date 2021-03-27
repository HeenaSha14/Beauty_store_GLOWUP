<?php


session_start();
include('includes/config.php');


if(isset($_POST['submit'])){

    
    $username=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['message'];
    if (!empty($username) || !empty($msg) || !empty($email) || !empty($phone)) 
    {
        $sql = "INSERT INTO contactus (username, email, phone, msg ) VALUES('$username','$email','$phone','$msg')";
        $sql_run=mysqli_query($conn,$sql);
        if($sql_run){
        echo "<script>alert('Mail Sent..!')</script>";
        echo "<script>window.location ='index.php'</script>";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }      
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="icon" type="image/x-icon" href="images/gu.jpg" />
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <title>Contact Us</title>
    <script>
    function phonevalid(){
        var phval = document.getElementById('phonenum').value;
        if(/^[0-9]{10}$/.test(phval)==false || phval==""){
            alert("error");
        }
    }
</script>
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
            <li class="active"><a href="contact.php">CONTACT</a></li>
            <?php 
                if(!isset($_SESSION['username']))
                {?>
                    <li><a href="account.php">ACCOUNTS</a></li>
                    
                <?php    }
                else{
                ?>
                    <li ><a href="logout.php">LOGOUT</a></li>
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
    <form id="contactus" action="contact.php" method="POST">
    <div class="contactForm">
        <h1>Contact Us</h1>
            <div class="form-group">
                <label>Username</label>
                <input class="form-control" name="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                
            </div>
            <div class="form-group">
                <label>Email Id</label>
                <input class="form-control" name="email" type="email" placeholder="Email ID *" required="required" data-validation-required-message="Please enter your email address." />
            
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input class="form-control" name="phone" id= "phonenum" type="number" placeholder="Contact Number *" required data-validation-required-message="Please enter your phone number." onblur="phonevalid();"/>
                
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="message" cols="70" rows="5"placeholder="Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
            </div>
            <button class="butn" name="submit">Send Message</button>
    </div>
</div>
</form>
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