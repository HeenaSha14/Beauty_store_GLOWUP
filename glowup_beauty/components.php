<?php


function component($productname, $productprice, $productimg, $productid,$productcatg){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0 py-3\">
                <form action=\"$productcatg.php?action=add&id=$productid\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <input type='hidden' name='cname' value='$productcatg'>
                            <input type='hidden' name='product_img' value='$productimg'>
                            <img src=\"$productimg\" alt=\"Image1\" name='product_img' class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\"id=\"product_name\">
                            <input type='hidden' name='product_name' value='$productname'>$productname</h5>
                          
                            <h5>
                               
                                <input type='hidden' name='product_price' value='$productprice'>
                                <span class=\"price\" id=\"price\" >₹$productprice</span>
                            </h5>
                            <!--<div>
                                    <button type=\"button\" class=\"btn minus-btn bg-light border rounded-circle disabled\"><i class=\"fas fa-minus\"></i></button>-->
                                    <input type=\"text\" value=\"1\" name=\"quantity\" id=\"quantity\" class=\"form-control w-25 d-inline\">
                               <!--     <button type=\"button\" class=\"btn plus-btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>-->
                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>



            <script type='text/javascript'> document.location ='cartss.php';>  </script>
    ";
    echo $element;
}


function cartElement($productimg, $productname, $productprice, $productid,$productcatg){
    
    if(!isset($_SESSION['username'])==true)
{
    echo "<script>alert('Register to buy Product!')</script>";
    echo "<script>window.location = 'account.php'</script>";
}
else{
    
    $element = "<form action=\"cartss.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded pl-4 pr-4 \">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pt-3 \">
                            <input type='hidden' name='productid' value='$productid'>
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6 pb-4  \">
                                <h5 class=\"pt-3\" name=\"pname\">$productname</h5>
                                <small class=\"text-secondary upper\">Category: $productcatg</small>
                                <h5 class=\"pt-3\"><span class=\"price\" name=\"price\" id=\"price\" >₹$productprice</span></h5>
                                
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                                
                            </div>
                           
                        </div>
                    </div>

                    <script type='text/javascript'> document.location ='cartss.php';>  </script>

                </form>

                



    
    ";}
    echo  $element;
}


function orderDetails($productimg, $productname, $productprice, $productid,$productcatg){
    
    if(!isset($_SESSION['username'])==true)
{
    echo "<script>alert('Register to buy Product!')</script>";
    echo "<script>window.location = 'account.php'</script>";
}
else{
    
    $element = "<form action=\"cartss.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded pl-4 pr-4 \">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pt-3 \">
                            <input type='hidden' name='productid' value='$productid'>
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6 pb-4  \">
                                <h5 class=\"pt-3\" name=\"pname\">$productname</h5>
                                <small class=\"text-secondary upper\">Category: $productcatg</small>
                                <h5 class=\"pt-3\"><span class=\"price\" name=\"price\" id=\"price\" >₹$productprice</span></h5>
                                
                                <h5 class=\"col-md-4 \">Ordered</h5>
                            </div>
                           
                        </div>
                    </div>

                    <script type='text/javascript'> document.location ='cartss.php';>  </script>

                </form>

                



    
    ";}
    echo  $element;

}

