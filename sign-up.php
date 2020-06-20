<?php error_reporting(0)?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head.php';?>
    <style>
    <?php include 'includes/form-style.css'?>
    </style>
</head>

<body>
    <div class="container-fluid bg-dark">
        <?php $page = 'contact-us';include 'includes/navbar_part.php'; ?>
    </div>
    <div class="row mt-5 container">
        <div class="col-12 text-center my-5">
            <h3 class="page-text">Create an Account for Apply</h3>
        </div>
        <div class="offset-md-2 col-md-6">
            <div id="logbox">
                <form id="signup" method="get" action="registration.php">
                    <h1>create an account</h1>
                    <input name="user" type="text" placeholder="What's your username?" autofocus="autofocus"
                        class="input pass" required="required" />
                    <input name="email" type="email" placeholder="Email address" class="input pass" />
                    <input name="password" type="password" placeholder="Enter password" class="input pass"
                        required="required" />
                    <input name="con_password" type="password" placeholder="Confirm password" class="input pass"
                        required="required" />
                    <input type="submit" value="Sign me up!" class="inputButton" />
                    <div class="text-center">
                        already have an account? <a href="login.php" id="login_id"> Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Footer-part start here-->
    <?php include 'includes/footer_part.php';?>
    <!--footer-part end here-->
    <!--script-part-->
    <?php include 'includes/script.php';?>
</body>

</html>