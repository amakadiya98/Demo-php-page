<?php 
    session_start();
   
    $con = mysqli_connect('localhost','root');
    if($con){
        echo "connection sucessful";
    }else{
        echo "no connection";
    }

    mysqli_select_db($con,'session_prac');
    
    $email = $_GET['email'];
    $pass = $_GET['password'];
    
    $query = " select * from signin where email = '$email' && password = '$pass' ";
   
    $result = mysqli_query($con,$query);

    $num = mysqli_num_rows($result);

  
    if($num == 1){
        
           $_SESSION['email']= $email;
          header('location:career-form-apply.php');
    }else{
            echo "crdential not match";
            header('location:login.php');
    }
?>