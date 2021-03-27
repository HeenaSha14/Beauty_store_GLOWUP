<?php 
    session_start();
    include('includes/config.php');
?>
<header>
        <nav>
        <div class="logo">
            <a href="#"><img src="images/glowup.png" width="200px"></a>
        </div>
            <ul class="nav-links">
                <li class="active"><a href="index.php">HOME</a></li>
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
        <link rel="stylesheet" href="styles/head.css">
</header>