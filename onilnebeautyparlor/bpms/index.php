<?php 
include('includes/dbconnection.php'); // connection
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit'])) // form field values
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $services=$_POST['services'];
    $branch=$_POST['branch']; // Newly added branch
    $adate=$_POST['adate'];
    $atime=$_POST['atime'];
    $phone=$_POST['phone'];
    $aptnumber = mt_rand(100000000, 999999999);  // Generates a random 9-digit appointment number.
  
    $query=mysqli_query($con,"insert into tblappointment(AptNumber,Name,Email,PhoneNumber,AptDate,AptTime,Services,Branch) value('$aptnumber','$name','$email','$phone','$adate','$atime','$services','$branch')");
    if ($query) {
      $ret=mysqli_query($con,"select AptNumber from tblappointment where Email='$email' and  PhoneNumber='$phone'");
      $result=mysqli_fetch_array($ret);
      $_SESSION['aptno']=$result['AptNumber'];
      echo "<script>window.location.href='thank-you.php'</script>";	// Redirects the user to a "thank-you.php
    }
    else {
      $msg="Something Went Wrong. Please try again";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Millen Hair Salon || Home Page</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
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
        :root {
            --navy-blue: #223656;
            --peach: #EED590;
            --tangerine: #F08C4A;
            --aqua: #43D9C0;
            --white: #FFFFFF;
            --soft-beige: #F4E7D3;
            --dark-brown: #6B4F4F;
        }

        /* Override Bootstrap Button Styles */
        .btn-primary {
            background-color: var(--navy-blue) !important; /* Navy blue background */
            border-color: var(--navy-blue) !important; /* Navy blue border */
            color: #ffffff !important; /* White text */
            transition: background-color 0.3s ease, border-color 0.3s ease; /* Smooth transition */
        }

        /* Hover Effect */
        .btn-primary:hover {
            background-color: #1a2a40 !important; /* Darker navy blue on hover */
            border-color: #1a2a40 !important; /* Darker navy blue border on hover */
        }

        /* Focus Effect */
        .btn-primary:focus {
            box-shadow: 0 0 0 0.2rem rgba(34, 54, 86, 0.5) !important; /* Navy blue focus shadow */
        }
        /* Hero Section */
        .hero {
            background-image: url(images/redbg.jpg);
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--white);
        }
        .hero .overlay {
            background-color: rgba(34, 54, 86, 0.6);
            padding: 20px;
            border-radius: 15px;
        }
        .hero h1 {
            font-family: 'Pacifico', cursive;
            font-size: 4rem;
            color: var(--white); /* Updated to white */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        .hero p {
            font-size: 1.2rem;
            margin-top: 20px;
            color: var(--white); /* Updated to white */
        }

        /* Appointment Section */
        .ftco-booking {
            background-color: var(--soft-beige);
            padding: 50px 0;
        }
        .appointment-wrap {
            background-color: var(--white);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .appointment-wrap h3 {
            color: #223656;
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .appointment-wrap .form-control {
            border: 2px solid var(--dark-brown);
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 15px;
            font-size: 1rem;
        }
        .appointment-wrap .form-control:focus {
            border-color: var(--aqua);
        }
        .appointment-wrap .btn-primary {
            background-color: var(--navy-blue); /* Updated to #223656 */
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-size: 1rem;
            font-weight: 700;
            color: var(--white);
            transition: background 0.3s;
        }
        .appointment-wrap .btn-primary:hover {
            background-color: #1a2a40; /* Darker navy blue on hover */
        }

        /* Reservation Text Color */
        .appointment-wrap .subheading {
            color: var(--tangerine); /* Updated to #F08C4A */
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        /* Image Section */
        .img {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Scroll Effects */
        [data-aos] {
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        [data-aos="fade-up"] {
            opacity: 0;
            transform: translateY(50px);
        }
        [data-aos="fade-down"] {
            opacity: 0;
            transform: translateY(-50px);
        }
        [data-aos="fade-left"] {
            opacity: 0;
            transform: translateX(-50px);
        }
        [data-aos="fade-right"] {
            opacity: 0;
            transform: translateX(50px);
        }
        [data-aos].aos-animate {
            opacity: 1;
            transform: translate(0);
        }
    </style>
</head>
<body>
    <?php include_once('includes/header.php');?>

    <!-- Hero Section -->
    <section id="home-section" class="hero" style="background-image: url(images/redbg.jpg);" data-stellar-background-ratio="0.5">
        <div class="home-slider owl-carousel">
            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                        <img class="one-third align-self-end order-md-last img-fluid" src="images/har2.png" alt="">
                        <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text mt-5">
                                <span class="subheading">Beauty Parlour</span>
                                <h1 class="mb-4">Good hair days start here.</h1>
                                <p class="mb-4">Ready to ditch the bad hair days and embrace your hair goals? We're experts in all things hair, from classic cuts and vibrant colors to the trendiest styles. Whether you're craving a complete makeover or just need a bit of TLC, we'll create a look that's perfect for you. ✨</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
                <div class="container-fluid p-0">
                    <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                        <img class="one-third align-self-end order-md-last img-fluid" src="images/hair.png" alt="">
                        <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text mt-5">
                                <span class="subheading">Natural Beauty</span>
                                <h1 class="mb-4">Get the look you deserve.</h1>
                                <p class="mb-4">This parlour provides huge facilities with advanced technology equipments and best quality service. Here we offer best treatment that you might have never experienced before.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Appointment Section -->
    <section class="ftco-section ftco-no-pt ftco-booking" data-aos="fade-down">
        <div class="container-fluid px-0">
            <div class="row no-gutters d-md-flex justify-content-end">
                <div class="one-forth d-flex align-items-end">
                    <div class="text">
                        <div class="appointment-wrap">
                            <span class="subheading">Reservation</span>
                            <h3 class="mb-2">Make an Appointment</h3>
                            <form action="#" method="post" class="appointment-form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" placeholder="Your Full Name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="appointment_email" placeholder="Your Email Address" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="services" id="services" required class="form-control">
                                                    <option value="">Select Services</option>
                                                    <?php $query=mysqli_query($con,"select * from tblservices");
                                                    while($row=mysqli_fetch_array($query)) { ?>
                                                        <option value="<?php echo $row['ServiceName'];?>"><?php echo $row['ServiceName'];?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="branch" id="branch" required class="form-control">
                                                    <option value="">Select Branch</option>
                                                    <?php $query=mysqli_query($con,"select * from tblbranch");
                                                    while($row=mysqli_fetch_array($query)) { ?>
                                                        <option value="<?php echo $row['Branch'];?>"><?php echo $row['Branch'];?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control appointment_date" placeholder="Select Date" name="adate" id='adate' required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control appointment_time" placeholder="Select Time" name="atime" id='atime' required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Phone Number" required maxlength="10" pattern="[0-9]+">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
								<input type="submit" name="submit" value="Make an Appointment" class=" btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="one-third">
                    <div class="img" style="background-image: url(images/salon.jpg);"></div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('includes/footer.php');?>

    <!-- Scripts -->
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
    <script>
        // Initialize AOS (Animate On Scroll)
        AOS.init({
            duration: 1000, // Animation duration
            once: true, // Whether animation should happen only once
        });
    </script>
</body>
</html>