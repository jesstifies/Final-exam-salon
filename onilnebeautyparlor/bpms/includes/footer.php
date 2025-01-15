<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .footer {
      background-color: #223656;
      color: white;
      padding: 20px 0;
    }
    .footer h2 {
      color: #eed590;
    }
    .footer a {
      color: #43d9c0;
      transition: color 0.3s ease;
    }
    .footer a:hover {
      color: #f08c4a;
    }
    .footer .ftco-footer-widget {
      margin-bottom: 20px;
    }
    .footer .block-23 ul {
      list-style: none;
      padding: 0;
    }
    .footer .block-23 ul li {
      margin-bottom: 10px;
    }
    .footer .block-23 ul li .text {
      color: white;
    }
    iframe {
      border: 0;
      width: 100%;
      height: 300px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <footer class="footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2 logo">@Milen salon Shop</h2>
            <?php
            $ret = mysqli_query($con, "select * from tblpage where PageType='aboutus'");
            while ($row = mysqli_fetch_array($ret)) {
            ?>
            <p><?php echo substr($row['PageDescription'], 0, 200); ?> <a href="about.php">More.......</a></p>
            <?php } ?>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <?php
              $ret = mysqli_query($con, "select * from tblpage where PageType='contactus'");
              while ($row = mysqli_fetch_array($ret)) {
              ?>
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text"><?php echo $row['PageDescription']; ?></span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+<?php echo $row['MobileNumber']; ?></span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><?php echo $row['Email']; ?></span></a></li>
              </ul>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <div class="block-23 mb-3">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3864.3267785321405!2d120.97445127357602!3d14.408316481758492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d22decfa4fb3%3A0x22ee9a583731962f!2sRFC%20Molino%20Mall!5e0!3m2!1sen!2sph!4v1736975557149!5m2!1sen!2sph" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p>2025 &copy; Milen Salon</p>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
