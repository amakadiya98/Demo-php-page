<?php
        session_start();
        if(!isset($_SESSION['email'])){
            header('location:login.php');
        }
      
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php  include 'includes/head.php';?>
    <style>
    <?php include 'includes/career-form-style.css';?>
    </style>
</head>

<body>
    <div class="container-fluid bg-dark">
        <?php 
           $page='contact-us'; include 'includes/navbar_part.php';
        ?>
    </div>
    <div class="container">
        <h2 class="main-text py-5">Here you can easily apply <?php echo  $_SESSION['email']; ?></h2>
        <a href="logout.php" class="my-3">LOGOUT</a>
    </div>
    <!--Footer-part start here-->
    <?php  include 'includes/footer_part.php';?>
    <!--footer-part end here-->
    <!--script-part-->
    <?php  include 'includes/script.php';?>
</body>

</html>