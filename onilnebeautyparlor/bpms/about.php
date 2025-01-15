<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Global Theme Colors */
        :root {
            --navy-blue: #223656;
            --peach: #EED590;
            --tangerine: #F08C4A;
            --aqua: #43D9C0;
            --white: #FFFFFF;
        }

        /* Hero Section */
        .hero-wrap {
            background-color: var(--navy-blue);
            padding: 50px 0;
        }
        .hero-wrap .overlay {
            background-color: rgba(34, 54, 86, 0.6);
        }
        .hero-wrap h2 {
            color: var(--peach);
        }
        .hero-wrap .breadcrumbs a {
            color: var(--aqua);
        }
        .hero-wrap .breadcrumbs span {
            color: var(--white);
        }

        /* About Section */
        .wrap-about .big {
            color: var(--navy-blue);
           
        }
        .wrap-about .subheading {
            color: var(--navy-blue);
            font-size: larger;
        }
        .wrap-about p {
            color: black !important;;
            margin-bottom: 20px;
        }

        /* Footer */
        footer {
            background-color: var(--navy-blue);
            color: var(--white);
        }
    </style>
</head>
<body>
    <?php include_once('includes/header.php'); ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/image_1.jpg');" data-stellar-background-ratio="0.5">
        
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5">
                    <h2 class="mb-0 bread" style="color: var(--tangerine);">About Us</h2>
                </div>
            </div>
        </div>
    </section>

    <br>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about1.jpg); height: 100%;"></div>
                </div>
                <div class="col-md-6 py-md-5 pb-5 wrap-about pb-md-5 ftco-animate">
                    <?php
                    $ret = mysqli_query($con, "SELECT * FROM tblpage WHERE PageType='aboutus'");
                    while ($row = mysqli_fetch_array($ret)) {
                    ?>
                        <div class="heading-section mb-4 mt-md-5">
                      
                            <span class="subheading"><?php echo $row['PageTitle']; ?></span>
                        </div>
                        <div>
                            <p><?php echo $row['PageDescription']; ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <br>

    <?php include_once('includes/footer.php'); ?>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
