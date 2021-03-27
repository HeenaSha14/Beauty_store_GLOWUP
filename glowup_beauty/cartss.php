<?php
session_start();
include('includes/config.php');
require_once ('./components.php'); 


if (isset($_POST['remove'])){
    if ($_GET['action'] == 'remove'){
        foreach ($_SESSION['cart'] as $key => $value){
            if($value["id"] == $_POST['productid']){
                $productid=$value['id'];
                $query_delete=mysqli_query($conn,"delete from cart where id='$productid' and username='".$_SESSION['username']."'");
                if ($query_delete === false) {
                    echo "Error: " . $query_delete . "<br>" . $conn->error;
                    }
                else{
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been Removed...!')</script>";
               // echo "<script>window.location = 'cartss.php'</script>";
            }
            }
        }
    }
}
if(isset($_POST['placeorder'])){
    echo "<script>alert('ORDER PLACED..!!')</script>";
    unset($_SESSION['cart']);
    echo "<script>window.location = 'index.php'</script>";
         
} 


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart|GlowUp</title>
    <link rel="icon" type="image/x-icon" href="images/gu.jpg" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/cart.css">


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
            <li ><a href="products.php">PRODUCTS</a></li>
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
<div class="container-fluid">
    <div class="row px-5 ">
        <div class="col-md-7">
          
        <main>
        <h1>SHOPPING CART</h1>
        <?php
        $total = 0;
        if(!isset($_SESSION['username']))
        {
            echo "<script>alert('Login to view cart!')</script>";
            echo "<script>window.location = 'account.php'</script>";    
        }

        else{
            if(isset($_SESSION['username'])){
            if (isset($_SESSION['cart'])){
                foreach ($_SESSION["cart"] as $key => $value){
                    ?>
                 <form action="newcart.php?action=remove&id=<?php $value['id'] ?>" method="post" class="cart-items">
                    <div class="border rounded pl-4 pr-4 ">
                    <div class="row bg-white">
                        <div class="col-md-3 pt-3 ">
                        <input type='hidden' name='productid' value='<?php echo $value['id'] ?>'>
                            <img src=<?php echo $value['image'] ?> alt="Image1" class="img-fluid">
                        </div>
                        <div class="col-md-6 pb-4">
                            <h5 class="pt-3" name="pname"><?php echo $value['p_name'] ?></h5>
                            <small class="text-secondary upper">Category:<?php echo $value['catg'] ?></small>
                            <h5 class="pt-3"><span class="quantity" name="quantity" >Quantity:</span></h5>
                            <input type="text" value="<?php echo $value["quantity"]; ?>" id="quantity"class="form-control w-25 d-inline" disabled>
                         <?php   $item_price= $value["quantity"]*$value['price'] ?>
                            <h5 class="pt-3"><span class="price" name="price" id="price" >₹<?php echo $item_price ?></span></h5>
                            <button type="submit" class="btn btn-danger mx-2" name="remove">Remove</button>
                            
                        </div>
                    </div>
                    </div>
                    </form>
                    
                    <?php   
                           $total = $total + (int)$item_price;
                     }
                            
 
                     } }
                
       //    }
      //  }
        else{
            echo "<h5>Cart is Empty</h5>";
        }
    }

?>
    </div>
    <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

        <div class="pt-4">
        <h6>PRICE DETAILS</h6>
        <hr>
        <div class="row price-details">
            <div class="col-md-6">
                <?php
                    if (isset($_SESSION['cart'])){
                        $count  = count($_SESSION['cart']);
                        echo "<h6>Price ($count items)</h6>";
                    }else{
                        echo "<h6>Price (0 items)</h6>";
                    }
                ?>
                <h6>Delivery Charges</h6>
                <hr>
                <h6>Amount Payable</h6>
            </div>
            <div class="col-md-6">
                <h6>₹<?php echo $total; ?></h6>
                <h6 class="text-success">FREE</h6>
                <hr>
                <h6>₹<?php
                    echo $total;
                ?></h6>
            </div>

        </div>
        </div>
        </div>
     <?php if (isset($_SESSION['cart']) and $count>0){ ?>
        <div class="col-md-4 offset-md-1 border rounded mt-5 mr-0 bg-white h-25">
        <div class="pt-2">
        <h6>BILLING DETAILS</h6>
        <hr>
        <?php
    $query=mysqli_query($conn,"select * from register where username='".$_SESSION['username']."'");
    $rows=mysqli_fetch_array($query)

?>
    <form id="billing" action="cartss.php" method="POST">
        <div class="form-group">
                <label>Username</label>
                <input class="form-control" name="name" type="text" placeholder="<?php echo $rows['username'];?>" required="required" disabled/>
                
            </div>
            <div class="form-group">
                <label>Email Id</label>
                <input class="form-control" name="email" type="email" placeholder="<?php echo $rows['email'];?>" disabled />
            
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input class="form-control" name="phone" type="tel" placeholder="<?php echo $rows['phone'];?>" disabled />
                
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" name="address" cols="70" rows="5"placeholder="Address *" required="required" data-validation-required-message="Please enter your address"></textarea>
            </div>
            <div class="col-md-8">
                <h6>Amount Payable: ₹<?php echo $total;?></h6>
            </div>
            <div class="col-md-6 pt-2">
            <button class="btn btn-warning" name="placeorder">Place Order</button>
        </div>
        <div class="pt-3">
        </div>
     </div>
        </div>
        </form>
        <?php } ?>


    </div>           
    
</div>
<?php
                
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<footer class="footers">
        <div class="inrow atc">
            <div class="pos1 ">Copyright &copy; GLOWUP 2020</div>
            <div class="pos2 ">
                <a class="but btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="but btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="but btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="pos3 ">
                <a class="pp" href="#!">Privacy Policy</a>
                <a href="#!">Terms of Use</a>
            </div>
        </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>