<?php
session_start();
include('includes/config.php');
$_SESSION['username']=="";
$_SESSION['cart']="";
session_unset();
echo"<script>alert('You have successfully logout')</script>";
?>
<script language="javascript">
document.location="index.php";
</script>
