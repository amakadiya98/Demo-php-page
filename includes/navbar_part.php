<div class="container">
<nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand" href="#"><img src='./images/brand-part.jpg'></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?php if($page=='home'){ echo 'active';}?>">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item <?php if($page=='demo'){ echo 'active';}?>">
                            <a class="nav-link" href="Demo.php">Demo</a>
                        </li>
                        <li class="nav-item <?php if($page=='about-us'){ echo 'active';}?>">
                            <a class="nav-link" href="About-us.php">About-us</a>
                        </li>
                        <li class="nav-item <?php if($page=='contact-us'){ echo 'active';}?>">
                            <a class="nav-link" href="Contact-us.php">Contact-us</a>
                        </li>
                    </ul>
                </div>
            </nav>
</div>
