<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Global Agent</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/jquery.timepicker.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include('includes/header.php') ?>
<!-- END nav -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/3.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-end justify-content-center">
<div class="col-md-9 ftco-animate text-center mb-5">
<h1 class="mb-2 bread">معلومات عنا</h1>
<p class="breadcrumbs"><span class="mr-2"><a href="index.php">الرئيسية <i class="fa fa-chevron-right"></i></a></span> <span>About <i class="fa fa-chevron-right"></i></span></p>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb">
<div class="container">
<div class="row d-flex">
<div class="col-md-6 d-flex">
<div class="img img-2 w-100 mr-md-2" style="background-image: url(images/10.jpg);"></div>
</div>
<div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
<div class="heading-section ftco-animate mb-5">
<span class="subheading" align="right">هذه اسرارنا</span>
<h2 class="mb-4" align="right">للشركة الوكيل العالمي</h2>
<p align="right"></p>
<p><a href="#" class="btn btn-primary">أعرف أكثر</a></p>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/9.jpg);" data-stellar-background-ratio="0.5">
<div class="container">
<div class="row d-md-flex align-items-center justify-content-center">
<div class="col-lg-10">
<div class="row d-md-flex align-items-center">

<?php
$appList=mysqli_query($con,"select * from  tblappointment");
$countApp=0;
while (count(mysqli_fetch_array($appList)))$countApp=$countApp+1;
$serviceList=mysqli_query($con,"select * from  tblservices");
$countService=0;
while (count(mysqli_fetch_array($serviceList)))$countService=$countService+1;
$expertList=mysqli_query($con,"select * from  tblservices");
$countExpert=0;
while (count(mysqli_fetch_array($expertList)))$countExpert=$countExpert+1;
?>
<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18">
<div class="text">
<strong class="number" data-number="<?php echo $countService;?>">0</strong>
<span>خدمة الخدمات</span>
</div>
</div>
</div>
<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18">
<div class="text">
<strong class="number" data-number="<?php echo $countExpert;?>">0</strong>
<span>العمال الخبراء</span>
</div>
</div>
</div>
<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
<div class="block-18">
<div class="text">
<strong class="number" data-number="<?php echo $countApp;?>">0</strong>
<span>عدد الحجوزات </span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-intro bg-primary">
<div class="container py-5">
<div class="row py-2">
<div class="col-md-12 text-center">
<h2>الموضات الجميلة .. الساعات السعيدة</h2>
<a href="services.php" class="btn btn-white btn-outline-white">احجز الآن</a>
</div>
</div>
</div>
</section>
<?php include('includes/footer.php') ?>
<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
</body>
</html>