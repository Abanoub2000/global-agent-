<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);
if(isset($_POST['submit']))
{

	$Name=$_POST['Name'];
	$PhoneNumber=$_POST['PhoneNumber'];
	$Email=$_POST['Email'];
	$Message=$_POST['Message'];


	$query=mysqli_query($con,"insert into tblcall_us(Name,PhoneNumber,Email,Message) value('$Name','$PhoneNumber','$Email','$Message')");
	if ($query) 
	{
		echo "<script>alert('Thank you for booking, your appointment number is $aptnumber, we will give you phone call shortly.');</script>";  		
		echo "<script>window.location.href='index.php'</script>";	
	}
	else
	{
		echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	 	
	}

}

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
<h1 class="mb-2 bread">أتصل بنا</h1>
<p class="breadcrumbs"><span class="mr-2"><a href="index.php">الرئيسية <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
</div>
</div>
</div>
</section>
<section class="ftco-section contact-section bg-light">
<div class="container">
<div class="row d-flex contact-info">
<div class="col-md-12" align="right">
<h2 class="h4 font-weight-bold">معلومات التواصل</h2>
</div>
<div class="w-100"></div>
<a href="#" class="col-md-3 d-flex custom-card-contact-mail">
<div class="dbox" align="right">
<p><span>:العنوان</span><br/>بنغازي شارع كتيبة </p>
</div>
</a>
<a href="tel:00218918031883" class="col-md-3 d-flex custom-card-contact-mail">
<div class="dbox" align="right">
<p><span>:الرقم الهاتف</span><br/> 00218927989564</p>
</div>
</a>
<a href="mailto:Kwalhsaad@gmail.com" class="col-md-3 d-flex custom-card-contact-mail">
<div class="dbox" align="right">
<p><span>:البريد الإلكتروني</span><br/> Kwalhsaad@gmail.com</p>
</div>
</a>
<a href="https://code4berry.com" target="_blank" class="col-md-3 d-flex custom-card-contact-mail">
<div class="dbox" align="right">
<p><span>:موقع الكتروني</span><br/>code4berry.com</p>
</div>
</a>
</div>
</div>
</section>
<section class="ftco-section ftco-no-pt contact-section">
<div class="container">
<div class="row d-flex align-items-stretch no-gutters">
<div class="col-md-6 p-5 order-md-last" align="right">
<h2 class="h4 mb-5 font-weight-bold">اتصل بنا</h2>
<form action="#" method="post" class="lcall_us-form">
<div class="form-group">
<input type="Name" Name="Name"  class="form-control" placeholder="الاسم" required>
</div>
<div class="form-group">
<input type="number" name="PhoneNumber" class="form-control" placeholder="الرقم الهاتف"required>
</div>

<div class="form-group">
<input type="email" name="Email" class="form-control" placeholder="البريد الإلكتروني"required>
</div>

<div class="form-group">
<textarea name="Message" cols="30" rows="7" class="form-control" placeholder="الرسالة"required></textarea>
</div>
<div class="form-group">
<input type="submit" name="submit" value="أرسل رسالة" class="btn btn-primary py-3 px-5">

</div>

</form>
</div>
<div class="col-md-6 d-flex align-items-stretch">
<div id="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26922.8098641305!2d20.843529746358765!3d32.49004033010269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1382116baa433b1d%3A0x9ff9ca101b9ef574!2z2KfZhNmF2LHYrNiMINmE2YrYqNmK2Kc!5e0!3m2!1sar!2sde!4v1660075622221!5m2!1sar!2sde" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></iframe>
</div>
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
<script src="js/main.js"></script>
</body>
</html>