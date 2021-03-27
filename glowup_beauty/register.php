<?php
session_start();
include('includes/config.php');


$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['passwords'];
$gender=$_POST['gender'];
if (!empty($username) || !empty($password) || !empty($email) || !empty($phone)|| !empty($gender)) 
{
    $value_name = "SELECT * FROM `register` WHERE username='$username'";
    $value_mail = "SELECT * FROM `register` WHERE email='$email'";
    $result_name = mysqli_query($conn, $value_name);
    $result_mail = mysqli_query($conn, $value_mail);
    if (mysqli_num_rows($result_name) > 0) {
        echo "<script>alert('Sorry... username already taken')</script>";
        echo "<script>window.location = 'account.php'</script>";
        
    }  
    else if(mysqli_num_rows($result_mail) > 0)
    {
        echo "<script>alert('Sorry... email already taken')</script>";
        echo "<script>window.location = 'account.php'</script>";
        
    }
    else{
        $sql = "INSERT INTO register (username,passwords,email,phone,gender) 
        VALUES ('$username','$password','$email','$phone','$gender')";
       if ($conn->query($sql) === TRUE) {
        echo "<script> alert('New record created successfully')</script>";
        echo "<script>window.location = 'account.php'</script>";
       } 
       else {
         echo "Error: " . $sql . "<br>" . $conn->error;
       }    
    }     
}
$conn->close();
?>