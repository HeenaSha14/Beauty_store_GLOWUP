<?php
session_start();
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services|GlowUp</title>
    <link rel="stylesheet" href="styles/services.css">
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
            <li class="active"><a href="services.php">SERVICES</a></li>
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
 <?php   
if(!isset($_SESSION['username'])==true)
{
    echo "<script>alert('LOGIN/REGISTER to view!')</script>";
    echo "<script>window.location ='account.php'</script>";
}
else{?>

<main>
       <div class="offers">
           
            <div class="banner" pos="1" >
                <a class="offer1" href="https://urbanclap.com" style="text-decoration:none;color:inherit;" target="_blank">
                 <div class="nw_grid_img">
                    <img src="images/urbanclap.png" id="myimg" style="display: inline;">
                     
                     
                 <div class="nw_content_row" id="rcorners1">  
                     <div class="nw_slide_content" style="background:rgba(255,255,255,1)"> 
                        <div class="nw_product_info nw_text_gap ">
                            <!--<div class="title_first"> 
                                   <span class="nw_discount">Upto 40% Off&nbsp;</span>
                         </div>-->
                         <div  class="discount_first">  
                                        <span style="font-size:35pt;color:rgb(235, 49, 151);" class="nw_discount">Get Upto 40% Off on all the these trending services.&nbsp;</span> 
                         </div> </div>  
                         <div class="nw_bt_tagline nw_text_gap nw_desc"> 
                                            <p style="font-size:30pt;text-align: center;">USE OUR PROMO CODE:1URB1517</p></div> 
                         </div>
                     </div>
                 </div>
                 </a>
             </div>
             <div class="banner" pos="1" >
                <a class="offer1" href="https://purple.com" style="text-decoration:none;color:inherit;" target="_blank">
                 <div class="nw_grid_img">
                   <img src="images/pp.png" id="myimg"  style="display: inline;">
                     
                 <div class="nw_content_row" id="rcorners1">  
                     <div class="nw_slide_content" style="background:rgba(255,255,255,1)"> 
                        <div class="nw_product_info nw_text_gap ">
                            <!--<div class="title_first"> 
                                   <span class="nw_discount">Upto 40% Off&nbsp;</span>
                         </div>-->
                         <div  class="discount_first">  
                                        <span style="font-size:35pt;color:rgb(207, 58, 158);" class="nw_discount">Get Upto 50% Off on all the Beauty categories&nbsp;</span> 
                         </div> </div>  
                         <div class="nw_bt_tagline nw_text_gap nw_desc"> 
                                            <p style="font-size:30pt;text-align: center;">USE OUR PROMO CODE:1PURP1517</p></div> 
                         </div>
                     </div>
                 </div>
                 </a>
             </div>
             <div class="banner" pos="1" >
                <a class="offer1" href="https://nykaa.com" style="text-decoration:none;color:inherit;" target="_blank">
                 <div class="nw_grid_img">
                     
                    <img src="images/nyk1.jpg" id="myimg"  style="display: inline;">
                 <div class="nw_content_row" id="rcorners1">  
                     <div class="nw_slide_content" style="background:rgba(255,255,255,1)"> 
                        <div class="nw_product_info nw_text_gap ">
                            <!--<div class="title_first"> 
                                   <span class="nw_discount">Upto 40% Off&nbsp;</span>
                         </div>-->
                         <div  class="discount_first">  
                                        <span style="font-size:35pt;color:rgb(235, 76, 168);" class="nw_discount">Save Upto 40% Off on 750+ Brands.&nbsp;</span> 
                         </div> </div>  
                         <div class="nw_bt_tagline nw_text_gap nw_desc"> 
                                            <p style="font-size:30pt;text-align: center;">USE OUR PROMO CODE:1NYKAA1715</p></div> 
                         </div>
                     </div>
                 </div>
                 </a>
             </div>
             <div class="banner" pos="1" >
                <a class="offer1" href="https://healthandglow.com" style="text-decoration:none;color:inherit;" target="_blank">
                 <div class="nw_grid_img">
                     
                    <img src="images/hg.jpg" id="myimg"  style="display: inline;">
                 <div class="nw_content_row" id="rcorners1">  
                     <div class="nw_slide_content" style="background:rgba(255,255,255,1)"> 
                        <div class="nw_product_info nw_text_gap ">
                            <!--<div class="title_first"> 
                                   <span class="nw_discount">Upto 40% Off&nbsp;</span>
                         </div>-->
                         <div  class="discount_first">  
                                        <span style="font-size:35pt;color:rgb(228, 83, 163);" class="nw_discount">Get Upto 50% Off on all the bueaty products&nbsp;</span> 
                         </div> </div>  
                         <div class="nw_bt_tagline nw_text_gap nw_desc"> 
                                            <p style="font-size:30pt;text-align: center;">USE OUR PROMO CODE:1HANDG1715</p></div> 
                         </div>
                     </div>
                 </div>
                 </a>
             </div>
             <div class="banner" pos="1" >
                <a class="offer1" href="https://myglamm.com" style="text-decoration:none;color:inherit;" target="_blank">
                 <div class="nw_grid_img">
                     
                    <img src="images/gaa.jpg" id="myimg"  style="display: inline;">
                 <div class="nw_content_row" id="rcorners1">  
                     <div class="nw_slide_content" style="background:rgba(255,255,255,1)"> 
                        <div class="nw_product_info nw_text_gap ">
                            <!--<div class="title_first"> 
                                   <span class="nw_discount">Upto 40% Off&nbsp;</span>
                         </div>-->
                         <div  class="discount_first">  
                                        <span style="font-size:35pt;color:rgb(240, 76, 172);" class="nw_discount">Get a chance to be first to buy the newly launched products.&nbsp;</span> 
                         </div> </div>  
                         <div class="nw_bt_tagline nw_text_gap nw_desc"> 
                                            <p style="font-size:30pt;text-align: center;">USE OUR PROMO CODE:1MYGL1715</p></div> 
                         </div>
                     </div>
                 </div>
                 </a>
             </div>
             <div class="banner" pos="1" >
                <a class="offer1" href="https://thebodyshop.com" style="text-decoration:none;color:inherit;" target="_blank">
                 <div class="nw_grid_img">
                     
                    <img src="images/body.jpg" id="myimg"  style="display: inline;">
                 <div class="nw_content_row" id="rcorners1">  
                     <div class="nw_slide_content" style="background:rgba(255,255,255,1)"> 
                        <div class="nw_product_info nw_text_gap ">
                            <!--<div class="title_first"> 
                                   <span class="nw_discount">Upto 40% Off&nbsp;</span>
                         </div>-->
                         <div  class="discount_first">  
                                        <span style="font-size:35pt;color:rgb(209, 68, 174);" class="nw_discount">Get Upto 50% Off on beauty accessories.&nbsp;</span> 
                         </div> </div>  
                         <div class="nw_bt_tagline nw_text_gap nw_desc"> 
                                            <p style="font-size:30pt;text-align: center;">USE OUR PROMO CODE:1BODYSP1715</p></div> 
                         </div>
                     </div>
                 </div>
                 </a>
             </div>
       </div>
      

 </main>

   <div>
       <table height="80px"></table>
   </div>


<?php } ?>
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