<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Millen Hair Salon - Services</title>
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
        /* Modern Design Updates */
        .hero-wrap {
            background: linear-gradient(120deg, #223656, #43D9C0);
            background-image: url('images/bg-2.jpg');
            background-size: cover;
            background-position: center;
            padding: 180px 0 80px; /* Adjusted padding to move content up */
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .hero-wrap .overlay {
            background: rgba(34, 54, 86, 0.6);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .hero-wrap h2 {
            color: #ffffff;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }
        .hero-wrap .breadcrumbs {
            color: #ffffff;
            font-size: 1.2rem;
            position: relative;
            z-index: 2;
        }
        .hero-wrap .breadcrumbs a {
            color: #f08c4a; /* Tangerine */
            text-decoration: none;
        }
        .hero-wrap .breadcrumbs a:hover {
            text-decoration: underline;
        }

        /* Services Section */
        .services-section {
            padding: 80px 0;
            background-color: #f8f9fa; /* Light background for contrast */
        }
        .service-card {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 15px 0;
            transition: transform 0.3s, box-shadow 0.3s;
            border: 2px solid #f08c4a; /* Tangerine border color */
        }
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        .service-card h3 {
            color: #223656; /* Navy Blue */
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .service-card p {
            color: #223656; /* Navy Blue */
            font-size: 1rem;
            margin: 0;
        }
        .service-card .price {
            color: #f08c4a; /* Tangerine */
            font-size: 1.2rem;
            font-weight: 700;
            margin-top: 10px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-wrap h2 {
                font-size: 2rem;
            }
            .service-card {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <?php include_once('includes/header.php'); ?>

    <!-- Hero Section -->
    <section class="hero-wrap hero-wrap-2">

        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5">
                    <h2 class="mb-0 bread">Services</h2>
                    <p class="breadcrumbs">
                        <!-- Breadcrumbs removed for simplicity -->
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="row justify-content-center pb-3">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Our Service Prices</h2>
                    <p>Welcome! Here are the list of our services.</p>
                </div>
            </div>
            <div class="row">
                <?php
                $ret = mysqli_query($con, "SELECT * FROM tblservices");
                $cnt = 1;
                while ($row = mysqli_fetch_array($ret)) {
                ?>
                <div class="col-md-4 ftco-animate">
                    <div class="service-card">
                        <h3><?php echo $row['ServiceName']; ?></h3>
                        <p><?php echo $row['Description']; ?></p>
                        <div class="price">$<?php echo $row['Cost']; ?></div>
                    </div>
                </div>
                <?php
                $cnt++;
                }
                ?>
            </div>
        </div>
    </section>

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