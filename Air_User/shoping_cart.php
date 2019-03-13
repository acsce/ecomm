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
	<title>Shoping Cart</title>
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
		

	<!-- Shoping Cart -->
	
		<div class="container">
			<div class="row">
			<!--Main Cart  start-->
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
						<?php
						$qr = mysqli_query($link,"SELECT * FROM `user_cart` WHERE cart_user_id='$user_id'");
						$ro = mysqli_num_rows($qr);
						if($ro == 0)
						{  ?>
							<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;Your Shopping Cart is empty</h3>
							<img src="images/slide/empty_cart2.jpg">
							
							<?php
						} 
						else 
						{
							?>
						
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">P_Img</th>
									<th class="column-2">P_Name</th>
									<th class="column-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price</th>
									<th class="mtext-104 cl3 txt-center">Qty</th>
									<th class="column-5">Total</th>
									<th class="column-5">Delete</th>
								</tr>
								
								
								
							<?php
						}
						#camera cart data start
						
			if($_SESSION["user"])
			{
				$res1 = mysqli_query($link,"SELECT * FROM `user_login` WHERE username='$_SESSION[user]'");
					while($row1=mysqli_fetch_array($res1))
					{
								$user_id = $row1['id'];
							
							
							$cart_t = 0;
							$tax = 0;
							$g_total_sh =0;
							$res2 = mysqli_query($link,"SELECT * FROM `user_cart` WHERE cart_user_id='$user_id'");
							while($row2=mysqli_fetch_array($res2))
							{
								$cid = $row2['cart_id'];
								$a = $row2['cart_qty'];
								$b = $row2['cart_price'];
								$ct_t = $b * $a;
								$cart_t = $cart_t + $ct_t;
							
						
								
								?>
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="../Air_Admin/<?php echo $row2['cart_img'];?>" alt="IMG">
										</div>
									</td>
									<td class="column-2"><?php echo $row2['cart_name'];?></td>
									<td class="column-3" >&nbsp;&nbsp;&nbsp;<div class="fa fa-rupee" ></div><?php  echo $row2['cart_price'];?></td>
									<td class="column-4">								
											<input class="mtext-104 cl3 txt-center" type="text" name="qty_s" value="1">
									</td>
									
									<td class="column-5"><?php echo $ct_t; ?></td>
					<form name="form1" action="" method="post" class="bg0 p-t-75 p-b-85">
									<td class="column-5">
									
									
									
									
									<button type="submit" name="del" class="item" data-toggle="tooltip" data-placement="top"  title="Delete">
											<i class="zmdi zmdi-delete"></i>
										</button> 
										</td>
					</form>
								</tr>
								<?php
								if(isset($_POST['del']))
									mysqli_query($link,"DELETE FROM `user_cart` WHERE cart_id=$cid");									
							}							
					}														
			}#session endif 
			?>	
			
							</table>
						</div>

						
					</div>
				</div>
				<!--Main Cart  end-->
	
	<!--??????????????-->		
				<!-- Cart Totals start-->
				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Net Amount:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									<div class="fa fa-rupee"></div>&nbsp;&nbsp;<?php echo $cart_t; ?>
								</span>
							</div>
						</div>
						<?php
						
							$tax = 0;
							$g_total_sh =0;
						if($cart_t<1000)
						{
							$tax = $tax + 50;
							$cart_t = $cart_t + $tax;
							$g_total_sh = $cart_t;
						}else{
							$cart_t = $cart_t + $tax;
							$g_total_sh = $cart_t;
						}
						?>
						
						
						<form name="form1" action="" method="post">
						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									User Information:
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">														
								<div class="p-t-15">
								
			<!--name-->			<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
									<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="sh1" placeholder="First Name" required pattern="[A-Za-z]+" title="Please Enter Valid firstname[a-z Only]." >										
								</div>
								<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
									<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="sh2" placeholder="Last Name" required pattern="[A-Za-z]+" title="Please Enter Valid lastname[a-z Only]." >										
								</div>
	
					<!--email--><div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">								
									<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="email" name="sh3" placeholder="E-mail ID" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please Enter Valid E-mail ID" style="...">										
								</div>
				<!--address--><div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
									<textarea class="stext-111 cl8 plh3 size-111 p-lr-15" cols="10" rows="5" name="sh4" placeholder="Enter complete address" required></textarea>				
								</div>
				<!--city name--><div class="bor8 bg0 m-b-12">
									<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="sh5" placeholder="City Name" required pattern="[A-Za-z]+" title="Please Enter Valid Cityname[a-z Only]." style="...">
								</div>

				<!--city pincode--><div class="bor8 bg0 m-b-22">
									<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="sh6" placeholder="City-Pincode" required pattern="[0-9]{6}" title="Please Enter Valid City-Pincode[0-9 only]" style="...">
								</div>
							
								</div>
								
							</div>
							<div >
									<span class="stext-110 cl2">
									Shipping Charges:&nbsp;&nbsp;<div class="fa fa-rupee"></div>&nbsp;&nbsp;<?php echo $tax; ?>
									</span>
								</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total Amount:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									<div class="fa fa-rupee"></div>&nbsp;&nbsp;<?php echo $g_total_sh; ?>
								</span>
							</div>
						</div>

						<button type="submit" name="sub_sh" id="myImage" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Proceed to Checkout
						</button>
						</form>
					</div>
				</div>
				<!-- Cart Totals end-->
	
	<?php
	if($_SESSION["user"])
	{
		$res1 = mysqli_query($link,"SELECT * FROM `user_login` WHERE username='$_SESSION[user]'");
		 while($row = mysqli_fetch_array($res1))
		 {			 
		  $id = $row['id'];
		  $username = $row['username'];
		  $pass = $row['password'];
		  $mobile = $row['mobile_no'];
		 }
			
			if(isset($_POST["sub_sh"]))
			{
				$qry = mysqli_query($link,"UPDATE `user_login` SET `id`='$id',`username`='$username',`password`='$pass',`f_name`='$_POST[sh1]',`l_name`='$_POST[sh2]',`mobile_no`='$mobile',`e_mail`='$_POST[sh3]',`address`='$_POST[sh4]',`city`='$_POST[sh5]',`pincode`='$_POST[sh6]' WHERE username='$username'   ");
				if($qry == True)
				{
				?>
					<script type="text/javascript">										
						alert("Your Order Is Successfully Added");										
					</script>
				<?php
				}
			}
		
	}							
	?>
					
			</div>
		</div>
	<?php
	#cart_info
	if($_SESSION["user"])
	{			
			$res1 = mysqli_query($link,"SELECT * FROM `user_cart`");
			while($row1 = mysqli_fetch_array($res1))
			{
				$us1 = $row1['cart_id'];
				$us2 = $row1['cart_user_id'];
				$us3 = $row1['cart_img'];
				$us4 = $row1['cart_name'];
				$us5 = $row1['cart_price'];
				$us6 = $row1['cart_qty'];
				$ct_t = $us6 * $us5;	
			}
			$qr = mysqli_query($link,"UPDATE `user_cart` SET `cart_id`='$us1',`cart_user_id`='$us2',`cart_img`='$us3',`cart_name`='$us4',`cart_price`='$us5',`cart_qty`='$us6',`cart_total`='$ct_t' WHERE cart_id='$us1'  ");
			
	}
	?>
	
	<!-- Footer -->
	<?php include "footer.php";?>


	<!-- Back to top -->
	<?php include "back_to_top.php";?>

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
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
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