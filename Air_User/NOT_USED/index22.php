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
	<title>Air Shopping</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
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
	
	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--===============================================================================================-->
<!--pagination css-->
<link href="pagination/css/pagination.css" rel="stylesheet" type="text/css">
<link href="pagination/css/A_green.css" rel="stylesheet" type="text/css">

</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<?php include "header_desktop.php";?>

		<!-- Header Mobile -->
		<?php include "header_mobile.php";?>


		<!-- Menu Mobile -->
		<?php include "menu_mobile.php";?>

		<!-- Modal Search -->
		<?php #include "mobile_search.php";?>
	</header>

	<!-- Cart -->
	<?php #include "demo_cart.php";?>
	
	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(images/slide/slide-01.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Don't miss Out!
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Discounts on HeadPhones
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="product_display.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/slide/slide-02.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Introducing the new
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Laptops
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="product_display.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(images/slide/slide-03.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Huge Discounts on 
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Pendrive & Headphone
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="product_display.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item-slick1" style="background-image: url(images/slide/slide-08.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Don't miss Out!
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Discounts on Camera
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="product_display.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item-slick1" style="background-image: url(images/slide/slide-07.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Introducing the new
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									SMART PHONES
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="product_display.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Banner -->
	<?php #include "banner.php";?>


	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Product Overview
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".camera">
						Cameras
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".headphone">
						HeadPhones
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".laptop">
						Laptops
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".mobile">
						Mobiles
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".pendrive">
						PenDrives
					</button>
				</div>
				<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
					<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
					<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
					Search
				</div>
			</div>
			 
				<!-- Search product -->
			<form action="index22.php" method="post">
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button type="submit" name="sear" class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search" placeholder="Search Items...">
					</div>	
				</div>
			</form>
			<?php
				$output = '';
				if(isset($_POST['search']))
				{
					$searchq = $_POST['search'];
					$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
					
					$qry = mysqli_query($link,"SELECT * FROM `add_camera` WHERE brand_name LIKE '%$searchq%'");
					$count = mysqli_num_rows($qry);
					if($count == 0)
					{
						$output = 'There was no search results!';
					}else
					{
						while($row = mysqli_fetch_array($qry))
						{
								?>
								
					<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item camera">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<a href="product_detail_c.php?c_id=<?php echo $row['c_id'];?>">
								<img src="../Air_Admin/<?php echo $row['img1'];?>"  alt="IMG-PRODUCT">							
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product_detail_c.php?c_id=<?php echo $row['c_id'];?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $row['brand_name'];?>
								</a>

								<span class="stext-105 cl3"><div class="fa fa-rupee"></div>
									<?php echo $row['price'];?>
									
								</span>
							</div>

						</div>
					</div>
				</div>
				
				
			<?php	}
							
						}
						
					}
				
				
				?>
			
				<!-- Filter -->
				<?php #include "filter.php"; ?>
			

			<div class="row isotope-grid">
			<?php 
			include("pagination/function.php");
					$page=(int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
					$limit = 10;
					$startpoint = ($page * $limit)-$limit;
					$statement = "add_camera";
			$res = mysqli_query($link,"select * from {$statement} LIMIT {$startpoint} , {$limit}");
			while($row=mysqli_fetch_array($res))
			{
				?>
				<!--1 start-->
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item camera">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<a href="product_detail_c.php?c_id=<?php echo $row['c_id'];?>">
								<img src="../Air_Admin/<?php echo $row['img1'];?>"  alt="IMG-PRODUCT">							
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product_detail_c.php?c_id=<?php echo $row['c_id'];?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $row['brand_name'];?>
								</a>

								<span class="stext-105 cl3"><div class="fa fa-rupee"></div>
									<?php echo $row['price'];?>
									
								</span>
							</div>

						</div>
					</div>
				</div>
				<!--1 end-->
				<?php
			}
			
			$res = mysqli_query($link,"SELECT * FROM `add_headphone`");
			while($row=mysqli_fetch_array($res))
			{
				?>
			<!--2 start-->
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item headphone">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<a href="product_detail_h.php?h_id=<?php echo $row['h_id'];?>">
								<img src="../Air_Admin/<?php echo $row['img1'];?>" alt="IMG-PRODUCT">							
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product_detail_h.php?h_id=<?php echo $row['h_id'];?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $row['brand_name'];?>
								</a>

								<span class="stext-105 cl3"><div class="fa fa-rupee"></div>
									<?php echo $row['price'];?>
									
								</span>
							</div>

						</div>
					</div>
				</div>
				<!--2 end-->
				<?php
			}
			$res = mysqli_query($link,"SELECT * FROM `add_laptop`");
			while($row=mysqli_fetch_array($res))
			{
			?>
			<!--3 start-->
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item laptop">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<a href="product_detail_l.php?l_id=<?php echo $row['l_id'];?>">
								<img src="../Air_Admin/<?php echo $row['img1'];?>" alt="IMG-PRODUCT">							
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product_detail_l.php?l_id=<?php echo $row['l_id'];?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $row['brand_name'];?>
								</a>

								<span class="stext-105 cl3"><div class="fa fa-rupee"></div>
									<?php echo $row['price'];?>
									
								</span>
							</div>

						</div>
					</div>
				</div>
				<!--3 end-->
				<?php
			}
			$res = mysqli_query($link,"SELECT * FROM `add_mobile`");
			while($row=mysqli_fetch_array($res))
			{
			?>
			<!--4 start-->
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item mobile">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<a href="product_detail_m.php?m_id=<?php echo $row['m_id'];?>">
								<img src="../Air_Admin/<?php echo $row['img1'];?>" alt="IMG-PRODUCT">							
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product_detail_m.php?m_id=<?php echo $row['m_id'];?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $row['brand_name'];?>
								</a>

								<span class="stext-105 cl3"><div class="fa fa-rupee"></div>
									<?php echo $row['price'];?>
									
								</span>
							</div>

						</div>
					</div>
				</div>
				<!--4 end-->
				<?php
			}
			$res = mysqli_query($link,"SELECT * FROM `add_pendrive`");
			while($row=mysqli_fetch_array($res))
			{
			?>
			<!--5 start-->
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item pendrive">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<a href="product_detail_p.php?p_id=<?php echo $row['p_id'];?>">
								<img src="../Air_Admin/<?php echo $row['img1'];?>" alt="IMG-PRODUCT" >
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product_detail_p.php?p_id=<?php echo $row['p_id'];?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $row['brand_name'];?>
								</a>

								<span class="stext-105 cl3"><div class="fa fa-rupee"></div>
									<?php echo $row['price'];?>
									
								</span>
							</div>

						</div>
					</div>
				</div>
				<!--5 end-->
				<?php
			}
			?>
		
			</div>
			<!-- Pagination -->
			<div class="flex-c-m flex-w w-full p-t-38">
				<?php
				echo pagination($statement,$limit,$page);
			?>
			</div>

			
		</div>
	</section>
			

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
		$('.js-addwish-b2').on('click', function(e){
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