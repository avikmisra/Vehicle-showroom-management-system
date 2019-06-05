<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->
        <link rel="stylesheet" href="src/css/font-awesome.min.css">
        <link rel="stylesheet" href="src/css/bootstrap.css">
        <link rel="stylesheet" href="src/css/style.css">
        <title>Airline Reservation System</title>
    </head>

    <body>
    <!--log in modal-->
    <?php
        include("login.php");
    ?>
    <!--sign up modal-->
    <?php
        include("signup.php");
    ?>
    <!--navbar-->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
                <a href="index.html" class="navbar-brand">HIGHFLY</a>
                <button type="button" name="button" class="navbar-toggler" data-toggle="collapse" data-target="#navNavbar"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="About Us.html" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="Services.html" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="Blog.html" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="Contact.html" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                    <?php
                     if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                        //echo "hello";
                    ?>
                        <div class="nav-link dropdown">
                            <div class="dropdown-toggle text-secondary"  data-toggle="dropdown">Hey<span class="caret"></span></div>
                            <ul class="dropdown-menu">
                                <li class="nav-link"><a href="#" style="text-decoration:none;">My profile</a></li>
                                <li class="nav-link"><a href="#" style="text-decoration:none;">Print ticket</a></li>
                                <li class="nav-link"><a href="logout.php" style="text-decoration:none;">log out</a></li>
                            </ul>
                     </div>
                        
                    <?php
                    } 
                    else 
                    {
                    ?>
                        <a href="#" class="nav-link fa fa-user" style="padding-top:12px;" data-toggle="modal" data-target="#myModal2"> LOG IN</a>
                    <?php
                    }
                    ?>
                    <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#myModal" > sign in</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    <!--showcase slider!-->
    <section id="showcase">
        <div id="mycarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#mycarousel" data-slide-to="0" class="active">
                </li>
                <li data-target="#mycarousel" data-slide-to="1">
                </li>
                <li data-target="#mycarousel" data-slide-to="2">
                </li>
            </ol>
        <div class="carousel-inner">
            <div class="carousel-item carousel-image-1 active" >
                <div class="container">
                    <div class="carousel-caption d-none d-sm-block text-right mb-5">
                        <h1 class="display-3">Heading One</h1>
                        <p>India celebrates three National Festivals – Independence Day, Republic Day and Gandhi Jayanti. The government of India has declared national holiday on each of these. The citizens of India celebrate these festivals with full fervour.</p>
                        <a href="#" class="btn btn-primary btn-lg">Sign Up Now</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-image-2" >
                <div class="container">
                    <div class="carousel-caption d-none d-sm-block mb-5" >
                        <h1 class="display-3">Heading One</h1>
                            <p>India celebrates three National Festivals – Independence Day, Republic Day and Gandhi Jayanti. The government of India has declared national holiday on each of these. The citizens of India celebrate these festivals with full fervour.</p>
                            <a href="#" class="btn btn-danger btn-lg">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item carousel-image-3">
                <div class="container">
                    <div class="carousel-caption d-none d-sm-block text-right mb-5">
                        <h1 class="display-3">Heading One</h1>
                            <p>India celebrates three National Festivals – Independence Day, Republic Day and Gandhi Jayanti. The government of India has declared national holiday on each of these. The citizens of India celebrate these festivals with full fervour.</p>
                            <a href="#" class="btn btn-secondary btn-lg">Know More</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#mycarousel" data-slide="prev" class="carousel-control-prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#mycarousel" data-slide="next" class="carousel-control-next">
            <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </section>
    <!--search-->
    <?php
        include("search.php");
    ?>
<!--image gallary!-->
<?php
        include("image_galary.php");
?>
<!--last section!-->
<hr class="bg-warning">
<div class="row">
    <div class="col-lg-3">
        <div class="font-weight-bold pl-5 pb-3">Corporate</div>
        <div class="pl-5"><small>Investor information</small></div>
        <div class="pl-5"><small>About Trivago</small></div>
        <div class="pl-5 pb-3"><small>Careers</small></div>
    </div>
    <div class="col-lg-3">
        <div class="font-weight-bold pl-5 pb-3">Legal</div>
        <div class="pl-5"><small>Terms & Conditions</small></div>
        <div class="pl-5"><small>Policies</small></div>
        <div class="pl-5 pb-3"><small>Disclaimer</small></div>
    </div>
    <div class="col-lg-3">
    <div class="font-weight-bold pl-5 pb-3">Support</div>
        <div class="pl-5"><small>Contact Us</small></div>
        <div class="pl-5"><small>FAQs</small></div>
        <div class="pl-5"><small>Special Assistance</small></div>
        <div class="pl-5"><small>Feedback</small></div>
        <div class="pl-5 pb-3"><small>Baggage</small></div>
    </div>
    <div class="col-lg-3">
    <div class="font-weight-bold pl-5 pb-3">Others</div>
        <div class="pl-5"><small>Optional Charges</small></div>
        <div class="pl-5"><small>Explore</small></div>
        <div class="pl-5"><small>Faresheet</small></div>
        <div class="pl-5"><small>Sitemap</small></div>
        <div class="pl-5 pb-3"><small>Subscribe for offers</small></div>
    </div>
</div>
<!--footer-->
<div style="background-color:#0f204b;">
    <div class="row">
        <div class="col-lg-6">
            <div  class="p-4  text-white text-center"><small>Highfly@ ,All rights reserved</small></div>
        </div>
        <div class="col-lg-6 d-flex flex-row justify-content-center">
            <div class="p-2  text-white"><i class="fa fa-facebook text-left p-3" style="font-size:30px;"></i></div>
            <div class="p-2  text-white"><i class="fa fa-twitter text-left p-3" style="font-size:30px;"></i></div>
            <div class="p-2  text-white"><i class="fa fa-linkedin text-left p-3" style="font-size:30px;"></i></div>
            <div class="p-2  text-white"><i class="fa fa-instagram text-left p-3" style="font-size:30px;"></i></div>
        </div>
    </div>
</div>


        <script src="src/js/jquery.min.js"></script>
        <script src="src/js/popper.min.js"></script>
        <script src="src/js/bootstrap.min.js"></script>
        <script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>
        <script src="src/js/app2.js"></script>
    </body>
</html>

