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
    <title>Mobile</title>

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
                            <div class="col-lg-12">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
									
									<div class="row">
											<div class="col-md-12">
												<div class="overview-wrap">
													<h3 class="title-2 m-b-40"><div class="fa fa-mobile"></div>&nbsp;&nbsp;Add Mobile Products</h3>
													<a href="table_data.php">
													<button class="au-btn au-btn-icon au-btn--blue">
													<i class="fa fa-eye"></i>View item</button></a>
													
												</div>
												
											</div>
										</div>
										<hr class="line-seprate">
										<div><div>&nbsp;&nbsp;&nbsp;</div></div>
                                        
										<div class="form-group">
											<label>Brand & version</label>
											<input class="au-input au-input" type="text" name="m2" placeholder="Enter Brand Name & Version" required>
										
										
											<label>Product Qty</label>
											<input class="au-input au-input" type="text" name="m3" placeholder="Enter Product Quantity" required>
										</div>
										<div>
											<label>Add Images</label>
											<div>
											<label>Image 1</label>
											<input type="file"  name="m4" required>
											<label>Image 2</label>
											<input type="file"  name="m5" required>
											</div>
										</div>
										<div class="form-group">
											<label>Price</label>&nbsp;&nbsp;<div class="fa fa-rupee"></div>
											<input class="au-input au-input" type="text" name="m6" placeholder="Enter Producte Price" required>
										
										
											<label>Color</label>
											<input class="au-input au-input" type="text" name="m7" placeholder="Enter Color" required>
										</div>
										
										<div class="form-group">
											<label>RAM</label>
											<input class="au-input au-input" type="text" name="m8" placeholder="Enter RAM" required>
										
											<label>Internal Storage</label>
											<input class="au-input au-input" type="text" name="m9" placeholder="Enter ROM" required>
										</div>
										<div class="form-group">
											<label>Display Size</label>
											<input class="au-input au-input" type="text" name="m10" placeholder="Enter Display Size" required>
										
											<label>Operating System</label>
											<input class="au-input au-input" type="text" name="m11" placeholder="Enter Operating System" required>
										</div>
										<div class="form-group">
											<label>Camera Real</label>
											<input class="au-input au-input" type="text" name="m12" placeholder="Enter R(MP)" required>
											<label>Camera front</label>
											<input class="au-input au-input" type="text" name="m13" placeholder="Enter F(MP)" required>
										
										</div>
										<div class="form-group">
											<label>Battery</label>
											<input class="au-input au-input" type="text" name="m14" placeholder="Enter BatteryCapacity" required>
										
										
											<label>Weight(g)</label>
											<input class="au-input au-input" type="text" name="m15" placeholder="Enter weight(g)" required>
										</div>
										<div class="form-group">
											<label>Warranty</label>
											<input class="au-input au-input" type="text" name="m16" placeholder="Enter Warranty" required>
										
										</div>
										<div class="card-body">
                                        <button name="submit1"  type="submit" class="btn btn-outline-primary btn-lg btn-block">Add Product</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
		<?php

if(isset($_POST["submit1"]))
{
	#echo "hello fgfdhdfhdfhdfhdfhdfhdfhdf";
   $v1=rand(1111,9999);
   $v2=rand(1111,9999);
   $v3=$v1.$v2;
   $v3=md5($v3);
	#<!img1>
   $fnm11=$_FILES["m4"]["name"];
   $dst12="./Air_mobile_images/".$v3.$fnm11;
   $dst13="Air_mobile_images/".$v3.$fnm11;
   move_uploaded_file($_FILES["m4"]["tmp_name"],$dst12);

  #<!img2>
   $fnm21=$_FILES["m5"]["name"];
   $dst22="./Air_mobile_images/".$v3.$fnm21;
   $dst23="Air_mobile_images/".$v3.$fnm21;
   move_uploaded_file($_FILES["m5"]["tmp_name"],$dst22);
   

$qry = mysqli_query($link,"INSERT INTO `add_mobile`(`m_id`, `brand_name`, `product_qty`, `img1`, `img2`, `price`, `color`, `ram`, `rom`, `dis_size`, `android_os`, `camera_real`, `camera_front`, `battery`, `weight`, `warranty`) VALUES ('','$_POST[m2]','$_POST[m3]','$dst13','$dst23','$_POST[m6]','$_POST[m7]','$_POST[m8]','$_POST[m9]','$_POST[m10]','$_POST[m11]','$_POST[m12]','$_POST[m13]','$_POST[m14]','$_POST[m15]','$_POST[m16]')");
if($qry == True)
{
	?>
	<script type="text/javascript">
	alert("Item Added Successfully");
	</script>
	<?php
}
}





?>
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
