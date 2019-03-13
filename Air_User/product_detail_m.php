<?php
session_start();
if($_SESSION["user"]=="")
{
	?>
	<script type="text/javascript">
		window.location = "user_login.php";
	</script>
<?php
}
include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Detail</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/my2.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<?php include "header_desktop.php";?>

		<!-- Header Mobile -->
		<?php include "header_mobile.php";?>


		<!-- Menu Mobile -->
		<?php include "menu_mobile.php";?>

		<!-- Modal Search -->
		<?php #include "mobile_search.php";?>
		
	</header>

	<!--Demo Cart -->
	<?php #include "demo_cart.php";?>


	<!-- breadcrumb -->
	
	<?php
	
	$mid = $_GET["m_id"];
	$res = mysqli_query($link,"SELECT * FROM `add_mobile` WHERE m_id=$mid");
	while($row=mysqli_fetch_array($res))
	{
		?>
		<!--mobile Product Detail start-->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								

								<div class="item-slick3" data-thumb="../Air_Admin/<?php echo $row['img1'];?>">
									<div class="wrap-pic-w pos-relative">
										<img src="../Air_Admin/<?php echo $row['img1'];?>" alt="IMG-PRODUCT">

										
									</div>
								</div>

								<div class="item-slick3" data-thumb="../Air_Admin/<?php echo $row['img2'];?>">
									<div class="wrap-pic-w pos-relative">
										<img src="../Air_Admin/<?php echo $row['img2'];?>" alt="IMG-PRODUCT">

										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?php echo $row['brand_name'];?>
						</h4>

						<span class="mtext-106 cl2"><div class="fa fa-rupee"></div>
							<?php echo $row['price'];?>
						</span>
						<div><br></div>
						
									<ul class="p-lr-28 p-lr-15-sm">
										

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												RAM
											</span>

											<span class="stext-102 cl6 size-206">
												<?php echo $row['ram'];?>&nbsp;GB
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Internal Memory
											</span>

											<span class="stext-102 cl6 size-206">
												<?php echo $row['rom'];?>&nbsp;GB
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Display Size
											</span>

											<span class="stext-102 cl6 size-206">
												<?php echo $row['dis_size'];?>&nbsp;inch
											</span>
										</li>
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Opreting System
											</span>

											<span class="stext-102 cl6 size-206">
												<?php echo $row['android_os'];?>&nbsp;
											</span>
										</li>
										
										</ul>
									
						
						<!--  -->
						<form name="form1" action="" method="post">
						<div class="p-t-33">
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">									
									<a href="shoping_cart.php">
									<button name="sub_m" type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
										Add to cart
									</button>
									</a>
							</div>	
						</div>
						</form>
						
						<?php
						if($_SESSION["user"])
					{
						$res1 = mysqli_query($link,"SELECT * FROM `user_login` WHERE username='$_SESSION[user]'");
						while($row1=mysqli_fetch_array($res1))
							{
								$user_id = $row1['id'];
							
						if(isset($_POST["sub_m"]))
						{
								
							$qty = 1;
							$res = mysqli_query($link,"SELECT * FROM `add_mobile` where m_id = $mid");
							while($row=mysqli_fetch_array($res))
							{
								$a=$row['brand_name'];
								$b=$row['img1'];
								$c=$row['price'];
								#$d=$row['c_id'];
			
							}
							 
							mysqli_query($link,"INSERT INTO `user_cart`(`cart_id`, `cart_user_id`, `cart_img`, `cart_name`, `cart_price`, `cart_qty`, `cart_total`) VALUES ('','$user_id','$b','$a','$c','$qty','')");
						
						}
						}
							
					}
						?>
						
						<!--  -->
						<div class="flex-w flex-m p-l-100 p-t-40 respon7">
							<i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<i class="fa fa-google-plus"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<i class="fa fa-instagram"></i>						
						</div>
					</div>
				</div>
			</div>
		</div>
			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional information</a>
						</li>

						
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						

						<!-- - -->
						<div class="tab-pane fade show active" id="information" role="tabpanel">
							<div class="row">
								<div class="col-md-3">
								</div>
								
								<div class="col-md-3 ">
									<ul class="p-lr-28 p-lr-15-sm">
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Camera Real
											</span>

											<span class="stext-102 cl6 size-206">
												<?php echo $row['camera_real'];?>&nbsp;MP
											</span>
										</li>
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Color
											</span>

											<span class="stext-102 cl6 size-206">
												<?php echo $row['color'];?>
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Battery
											</span>

											<span class="stext-102 cl6 size-206">
												<?php echo $row['battery'];?>&nbsp;mAh
											</span>
										</li>

									</div>
									
									<div class="col-md-3">
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Camera Front
											</span>

											<span class="stext-102 cl6 size-206">
												<?php echo $row['camera_front'];?>&nbsp;MP
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Weight
											</span>

											<span class="stext-102 cl6 size-206">
												<?php echo $row['weight'];?>&nbsp;g
											</span>
										</li>
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Warranty
											</span>

											<span class="stext-102 cl6 size-206">
												<?php echo $row['warranty'];?>&nbsp;Years
											</span>
										</li>
										</div>
										<div class="col-md-3">
									</div>
									</ul>
							</div>
						</div>

						
					</div>
				</div>
			</div>
		</div>

		
	</section>
	<!--mobile Detail end -->
	<?php
	}
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<!-- Related Products -->
	<?php include "related_products.php";?>
	
		

	<!-- Footer -->
	<?php include "footer.php";?>


	<!-- Back to top -->
	<?php include "back_to_top.php";?>

	<!-- Modal1 -->
	<?php #include "modall.php";?>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>