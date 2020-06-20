<!doctype html>
<html lang="en">

<head>
    <?php  include 'includes/head.php';?>
</head>

<body>

    <div class="container-fluid bg-dark">
        <?php $page='contact-us'; include 'includes/navbar_part.php';?>
    </div>
    <div class="row mt-5 container">
        <div class="col-12 text-center my-5">
            <h3 class="page-text">Contact-Us-Page</h3>
        </div>
    </div>

    <section class="contact-part">
        <div class="container">
            <h2 class="demo-head-text">Contact with Expert Person</h2>
                <p class="discription-text">Some programmimg language experts are always here for you.</p>
                <div class="form-part">
                    <form action="userinfo.php">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first-name" aria-describedby="emailHelp"
                                    placeholder="Enter First Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last-name" aria-describedby="nameHelp"
                                    placeholder="Enter Last Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" aria-describedby="nameHelp"
                                    placeholder="Enter Email">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" aria-describedby="nameHelp"
                                    placeholder="Enter Phone No">
                            </div>
                        </div>
                        <textarea class="form-control" name="message" placeholder="Enter Your Message"
                            rows="4"></textarea>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-secondary submit-part-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>

    </section>

    <!--Footer-part start here-->
    <?php  include 'includes/footer_part.php';?>
    <!--footer-part end here-->
    <!--script-part-->
    <?php  include 'includes/script.php';?>
</body>


</html>