<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$services=$_POST['services'];
	$adate=$_POST['adate'];
	$atime=$_POST['atime'];
	$phone=$_POST['phone'];
	$aptnumber = mt_rand(100000000, 999999999);
	$query=mysqli_query($con,"insert into tblappointment(AptNumber,Name,Email,PhoneNumber,AptDate,AptTime,Services) value('$aptnumber','$name','$email','$phone','$adate','$atime','$services')");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Beauty Salon Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
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
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.png');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-5">
                    <h1 class="mb-2 bread">احجز الخدمة الآن</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">الرئيسية <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Services <i
                                class="fa fa-chevron-right"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt bg-primary">
        <div class="container">
            <div class="row no-gutters">
				
                <?php $query=mysqli_query($con,"select * from tblworking_hours");
					while ($row=mysqli_fetch_array($query)) {?>

                	<?php if (empty($row['msg']) == false) {?>
                		<div class="card-header w-50 m-auto bg-light" style="margin-top:30px !important">
                    		<div class="card-body">
                        		<div class="w-100 text-center" style="font-size:18px"><?php echo $row['msg']?></div>
                    	</div>
                	</div>
                	<?php } 
				} ?>

                <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center">
                    <form method="post" class="appointment-form">
                        <h3 class="mb-3" align="right">احجز الخدمة الخاصة بك</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="name" name="name" class="form-control" placeholder="الاسم" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="البريد الإلكتروني" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="number" name="phone" class="form-control" placeholder=" الرقم الهاتف"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <input id="date_picker" type="date" name="adate" class="form-control book_date"
                                            placeholder="التاريخ" required>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <?php
										$query=mysqli_query($con,"select * from tblworking_hours");
										while ($row=mysqli_fetch_array($query)) {?>
                                        <input type="time" min="<?php echo substr($row['wfrom'], 0, 5)?>"
                                            max="<?php echo substr($row['wto'], 0, 5)?>" name="atime"
                                            class="form-control book_time" placeholder="الوقت" required>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="services" id="services" class="form-control" required>
                                                <option value="">اختر خدمة</option>
                                                <?php $query=mysqli_query($con,"select * from tblservices");
												while($row=mysqli_fetch_array($query))
												{
												?>
                                                <option id="selected" style="color: red;"
                                                    value="<?php echo $row['ServiceName'];?>">
                                                    <?php echo $row['ServiceName'];?></option>
                                                <?php
												} ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input type="submit" name="submit" value="احجز الآن" class="btn btn-white"
                                        onclick="bookNow()">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
$query=mysqli_query($con,"select * from tblworking_hours");
while ($row=mysqli_fetch_array($query)) {?>

    <section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt bg-primary">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 ftco-animate makereservation my-1">
                    <div class="w-100 text-center mb-3" style="color:#fff; font-size:32px"><?php echo $row['title']?>
                    </div>
                    <div class="w-50 m-auto">
                        <table class="table table-bordered text-center" style="color:#fff">
                            <thead>
                                <tr>
                                    <th>إلى الساعة</th>
                                    <th>من الساعة</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span><?php echo substr($row['wto'], 0, 5)?></span>
                                    </td>
                                    <td>
                                        <span><?php echo substr($row['wfrom'], 0, 5)?></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 ftco-animate makereservation">
                    <h1 class="mb-2 bread" align="right">خدمات</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Service Name</th>
                                <th>Service Prices</th>
                                <th>Experts</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
							$ret=mysqli_query($con,"select *from  tblservices");
							$cnt=1;
							while ($row=mysqli_fetch_array($ret)) {

?>

                            <tr>
                                <th scope="row"><?php echo $cnt;?></th>
                                <td id="list-service"><?php  echo $row['ServiceName'];?></td>
                                <td><?php  echo $row['Cost'];?></td>
                                <td><?php  echo $row['Experts'];?></td>
                            </tr> <?php 
								$cnt=$cnt+1;
							}?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php include('includes/footer.php') ?>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <?php 
	if ($query) 
	{		
		echo  '<script>
	function bookNow() {
		document.querySelectorAll(".form-control").forEach(y => {
			if(y.value != "") {
				let selector = document.querySelector("#services");
					document.querySelectorAll("#list-service").forEach(x => {
						if(selector.value === x.innerHTML) {
							x.style.background = "#000";
							x.style.color = "#fff";
						} else {
							x.style.background = "none";
							x.style.color = "#000";
						}
						setInterval(function() {
						x.style.background = "none";
						x.style.color = "#000";
						}, 3000);	
					});
		} else {
			console.log("Inputs is empty")
		};
	});
	};
	</script>';
	}
	else
	{
		echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	 	
	};
	?>
</body>

</html>