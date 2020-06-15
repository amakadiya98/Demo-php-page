<?php 

$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection successful";
}else{
    echo "no connection";
}

mysqli_select_db($con,'contact_info');

$first_name=$_GET['first-name'];
$last_name=$_GET['last-name'];
$email=$_GET['email'];
$phone_no=$_GET['phone'];
$message=$_GET['message'];

$query = "INSERT INTO `user_info`(`First Name`, `Last Name`, `Email`, `Phone no`, `Message`) 
            VALUES ('$first_name','$last_name','$email','$phone_no','$message')";
        echo "$query";

        mysqli_query($con,$query);

        header('location:index.php');
?>