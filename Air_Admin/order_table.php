<?php
session_start();
if($_SESSION["admin"]=="")
{
	?>
	<script type="text/javascript">
		window.location = "admin_login.php";
	</script>
<?php
}
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Order Table</title>

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

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php #include "header_part.php";?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php include "menu.php";?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include "header_desktop.php";?>
            <!-- END HEADER DESKTOP-->
 
            <!-- MAIN CONTENT-->
			<form name="form1" action="" method="post" enctype="multipart/form-data">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                           <div class="au-card m-b-30">
						   <!--Camera produtes Start-->
                            <div class="au-card-inner">
                                <h3 class="title-2 m-b-40"><div class="fa fa-shopping-cart"></div>&nbsp;&nbsp;ORDER TABLE</h3> 
								
								<div class="row m-t-30">
									<div class="col-md-12">
										<div class="table-responsive m-b-40">
											<table class="table table-borderless table-data3">
												<thead>
													<tr>
														<th></th>
														<th>PRINT</th>	
														<th>USER_ID</th>
														<th>P_IMAGE</th>
														<th>B_NAME</th>
														<th>P_QTY</th>
														<th>P_PRICE</th>
														<th>F_NAME</th>
														<th>L_NAME</th>
														<th>M_NUMBER</th>
														<th>E_MAIL</th>
														<th>ADDRESS</th>
														<th>CITY</th>
														<th>PINCODE</th>
														<th>SUB_TOTAL</th>		
														<!--<th>TAX</th>	-->																									
														<th>T_PRICE</th>
													</tr>
												</thead>
												<?php
												$res = mysqli_query($link,"SELECT * 
																		   FROM user_login
																		   INNER JOIN user_cart 
																		   ON user_login.id=user_cart.cart_user_id order by cart_user_id desc");
												while($row=mysqli_fetch_array($res))
												{
													echo "<tbody>";
														echo "<tr>";
															echo "<td>";?> 
																				<!--<div class="table-data-feature">
																				
																					<a href="#">
																					<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
																						<i class="zmdi zmdi-delete"></i>
																					</button></a>
																					<a href="#">
																					<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
																						<i class="zmdi zmdi-edit"></i>
																					</button></a>
																					
																				</div>-->
																				<td>
																					<div class="table-data-feature">
																						 
																						<a href="print_order.php?cart_user_id=<?php echo $row["cart_user_id"];?>">
																							<button type="button" class="btn btn-primary btn-sm">
																							<i class="fa fa-print"></i>&nbsp; Display</button></a>															
																					</div>
									
																				</td>
																			
																			<?php 
																			
																			//calculetion
																			$a = $row['cart_qty'];
																			$b = $row['cart_price'];
																
																			
																			$g_total_sh = $a * $b;
							
																			
																			echo "</td>";
																				#echo "<td>";echo $row["date_time"];echo "</td>";
																				echo "<td>";echo $row["cart_user_id"];echo "</td>";
																				echo "<td>";?> <img src="<?php echo $row["cart_img"]; ?>" height="50" width="50"> <?php echo "</td>";
																				echo "<td>";echo $row["cart_name"];echo "</td>";
																				echo "<td>";echo $row["cart_qty"];echo "</td>";
																				echo "<td>";echo $row["cart_price"];echo "</td>";
																				echo "<td>";echo $row["f_name"];echo "</td>";
																				echo "<td>";echo $row["l_name"];echo "</td>";
																				echo "<td>";echo $row["mobile_no"];echo "</td>";
																				echo "<td>";echo $row["e_mail"];echo "</td>";
																				echo "<td>";echo $row["address"];echo "</td>";
																				echo "<td>";echo $row["city"];echo "</td>";
																				echo "<td>";echo $row["pincode"];echo "</td>";
																				echo "<td>";echo $row["cart_total"]; echo "</td>";
																				#echo "<td>";echo $tax;echo "</td>";																				
																				echo "<td>";echo $g_total_sh; echo "</td>";

																			
																								
														echo "</tr>";
													echo "</tbody>";
									
												}
												echo "</table>";
											?>	        
										</div>
									</div>
								</div>
                        </div>
						<!--Camera produtes End-->
						<hr class="line-seprate">
										<div><div>&nbsp;&nbsp;&nbsp;</div></div>
						<div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
		</form>
		
        <!-- END PAGE CONTAINER-->

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
