
<html>
	<head>
		<meta charset="utf-8">
		<title>Tax Invoice/Cash Memo</title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
		<link href="css/invoice.css" rel="stylesheet" media="all">
		
		<!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
	
	<script>
function myFunction() {
    window.print();
}
</script>

	
	</head>
	<body>
	<?php
	include "connection.php";
	$p_id = $_GET['cart_user_id'];
	$res = mysqli_query($link,"SELECT * 
							   FROM user_login
							   INNER JOIN user_cart 
							   ON user_login.id=user_cart.cart_user_id
							   WHERE user_cart.cart_user_id='$p_id' ");
	while($row=mysqli_fetch_array($res))
	{
		#$date_time = $row['date_time'];
		#$o_id = $row['o_id'];
		$id = $row['id'];
		$brand_name = $row['cart_name'];
		$product_qty = $row['cart_qty'];
		$f_name = $row['f_name'];
		$l_name = $row['l_name'];
		$mobile_no = $row['mobile_no'];
		$e_mail = $row['e_mail'];
		$address = $row['address'];
		$city = $row['city'];
		$pincode = $row['pincode'];
		
		$sub_total = $row['cart_total'];
		
		$price = $row['cart_price'];
		$img1 = $row['cart_img'];
		
	}
	
	
	?>
	
	
	
			<header>
			<h1>INVOICE</h1>
			<address >
				<p>AIR SHOPPING,</p>
				<p>207,Kambipura,<br>Mysore Road<br>Bengaluru-560074</p>
				<p>(+91) 1234 567 890</p>
			</address>
			<span><img alt="" src="images/icon/my_logo2.png"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address >
				<p><?php echo $f_name." ".$l_name ?> <br></p>
				
				<h6><?php echo $address;echo "<br/>";
						  echo $city;echo "-";echo $pincode;echo "<br/>";
						  echo $mobile_no;echo "<br/>";
						  echo $e_mail; ?>
				</h6>
				
			</address>
			<table class="meta">
				<!--<tr>
					<th><span >ORDER NO.</span></th>
					<td><span ><?php echo $p_id; ?></span></td>
				</tr>
				<tr>
					<th><span >DATE & TIME</span></th>
					<td><span ><?php echo $date_time; ?> </span></td>
				</tr>
				-->
				<tr>
					<th><span >USER ID.</span></th>
					<td><span ><?php echo $id; ?></span></td>
				</tr>
				
				
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >ITEM NAME</span></th>
						<th><span >ITEM IMAGE</span></th>
						<th><span >PRICE</span></th>
						<th><span >PRODUCTE QTY</span></th>						
						<th><span >Shipping_Charges</span></th>
						<th><span >NET AMOUNT</span></th>
					</tr>
				</thead>
				<tbody>
				<?php 
				include "connection.php";
				$p_id = $_GET['cart_user_id'];
				$res = mysqli_query($link,"SELECT * 
							   FROM user_login
							   INNER JOIN user_cart 
							   ON user_login.id=user_cart.cart_user_id
							   WHERE user_cart.cart_user_id='$p_id' ");
				$gg =0;
				$tax = 0;
				$g_total_shotal_sh = 0;
				while($row=mysqli_fetch_array($res))
				{
																	
						
					//calculetion
																			$a = $row['cart_qty'];
																			$b = $row['cart_price'];
																			$c = $tax;
																			$s_t = $a * $b;
																			$g_t = $s_t + ($c * $a);
																
																			$gg = $gg + $g_t;
						if($gg<1000)
						{
							$tax = $tax + 50;
							$gg = $gg + $tax;
							$gg = $gg;
						}else{
							$gg = $gg + $tax;
							$gg = $gg;
						}
																			
																			
					?>
					<tr >
						<td><span ><?php echo $row['cart_name']; ?></span></td>
						<td><span ><img src="<?php echo $row["cart_img"]; ?>" height="50" width="50"></span></td>
						
						<td><div class="fa fa-rupee"></div><span ><?php echo $row['cart_price'];?></span></td>
						<td><span ><?php echo $row['cart_qty'];?></span></td>						
						<td><div class="fa fa-rupee"><span ><?php echo $tax;?></span></td>
						<td><div class="fa fa-rupee"><span><?php echo $s_t;?></span></td>
					</tr>
					<?php
					
				}
				
					
				?>	
					
				</tbody>
			</table>
			
			<table class="balance">
				<tr>
					<th><span>Total Amount:</span></th>
					<td><div class="fa fa-rupee"><span><?php echo $gg;?></span></td>
				</tr>
				<!--<tr>
					<th><span >Amount Paid</span></th>
					<td><div class="fa fa-rupee"><span >0.00</span></td>
				</tr>
				<tr>
					<th><span >Balance Due</span></th>
					<td><div class="fa fa-rupee"><span>1285.2</span></td>
				</tr>-->
			</table> 
			
		</article>
			<div align="right">
			<span>Authorized Signatory</span>
				  </div>
				  <div><br/></div>
		<aside>
			<h1><span >Contact us</span></h1>
			<div >
				<p align="center">Email :- info@airshopping.com || Web :- www.airshopping.com || Phone :- +91 866 8363 143 </p>
			</div>
			<div>
							<div align="left">
								<a href="order_table.php">
								<button  type="button" class="btn btn-primary">
									<i class="fa fa-chevron-left"></i>&nbsp;Back</button></a>
							</div>
							<div align="right">
								<a href="#">
									<button  type="button" class="btn btn-primary" onclick="myFunction()">Print</button>
								</a>
							</div>
			</div>
		</aside>
	</body>
</html>
