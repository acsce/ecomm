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
    <title>Camera</title>

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
        <!-- HEADER PART-->
        <?php #include "header_part.php";?>
        <!-- END HEADER PART-->

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
													<h3 class="title-2 m-b-40"><div class="fa fa-camera"></div>&nbsp;&nbsp;Add Cameras Products</h3>
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
											<input class="au-input au-input" type="text" name="c2" placeholder="Enter Brand Name & Version" required >
										
										
											<label>Product Qty</label>
											<input class="au-input au-input" type="text" name="c3" placeholder="Enter Product Quantity" required>
										</div>
										<div>
											<label>Add Images</label>
											<div>
											<label>Image 1</label>
											<input type="file"  name="c4" required>
											<label>Image 2</label>
											<input type="file"  name="c5" required>
											</div>
										</div>
										<div class="form-group">
											<label>Price</label>&nbsp;&nbsp;<div class="fa fa-rupee"></div>
											<input class="au-input au-input" type="text" name="c6" placeholder="Enter Producte Price" required >
										
										
											<label>Color</label>
											<input class="au-input au-input" type="text" name="c7" placeholder="Enter Color" required>
										</div>
										
										<div class="form-group">
											<label>Effective Pixels(MP)</label>
											<input class="au-input au-input" type="text" name="c8" placeholder="Enter Pixels" required>
										
											<label>Image Type</label>
											<input class="au-input au-input" type="text" name="c9" placeholder="Image Type" required>
										</div>
										<div class="form-group">
											<label>Digital Zoom(x)</label>
											<input class="au-input au-input" type="text" name="c10" placeholder="Digital Zoom" required >
										
											<label>Video Resolution</label>
											<input class="au-input au-input" type="text" name="c11" placeholder="Video Resolution" required >
										</div>
										<div class="form-group">
											<label>Flash Memory</label>
											<input class="au-input au-input" type="text" name="c12" placeholder="Flash Memory" required>
											<label>Battery</label>
											<input class="au-input au-input" type="text" name="c13" placeholder="Enter Battery Capacity" required>
										
										</div>
										<div class="form-group">
											<label>Weight</label>
											<input class="au-input au-input" type="text" name="c14" placeholder="Enter Weight" required>
										
										
											<label>Warranty</label>
											<input class="au-input au-input" type="text" name="c15" placeholder="Enter Warranty" required>
										</div>
										
										<div class="card-body">
                                        <button name="submit1"  type="submit" class="btn btn-outline-primary btn-lg btn-block">Add Product</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="line-seprate">
										<div><div>&nbsp;&nbsp;&nbsp;</div></div>
                        <div class="row center">
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
   $fnm11=$_FILES["c4"]["name"];
   $dst12="./Air_camera_images/".$v3.$fnm11;
   $dst13="Air_camera_images/".$v3.$fnm11;
   move_uploaded_file($_FILES["c4"]["tmp_name"],$dst12);

  #<!img2>
   $fnm21=$_FILES["c5"]["name"];
   $dst22="./Air_camera_images/".$v3.$fnm21;
   $dst23="Air_camera_images/".$v3.$fnm21;
   move_uploaded_file($_FILES["c5"]["tmp_name"],$dst22);
   

$qry = mysqli_query($link,"INSERT INTO `add_camera`(`c_id`, `brand_name`, `product_qty`, `img1`, `img2`, `price`, `color`, `effective_pixels`, `img_type`, `digital_zoom`, `video_resolution`, `flash_memory`, `battery`, `weight`, `warranty`) VALUES ('','$_POST[c2]','$_POST[c3]','$dst13','$dst23','$_POST[c6]','$_POST[c7]','$_POST[c8]','$_POST[c9]','$_POST[c10]','$_POST[c11]','$_POST[c12]','$_POST[c13]','$_POST[c14]','$_POST[c15]')");
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
