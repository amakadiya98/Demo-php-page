<?php 
    session_start();
    header('location:login.php');
    $con = mysqli_connect('localhost','root');
    if($con){
        echo "connection sucessful";
    }else{
        echo "no connection";
    }

    mysqli_select_db($con,'session_prac');
    $name = $_GET['user'];
    $email = $_GET['email'];
    $pass = $_GET['password'];
    $c_pass = $_GET['con_password'];

   
    $query = " select * from signin where email = '$email' && password = '$pass' ";
    $result = mysqli_query($con,$query);

    $num = mysqli_num_rows($result);

    if($num == 1){
            echo "already register";
    }else{
        $query2 = "INSERT INTO `signin`(`name`, `email`, `password`, `confirm_password`) 
        VALUES ('$name','$email','$pass','$c_pass')";
        mysqli_query($con,$query2);
    }
?>