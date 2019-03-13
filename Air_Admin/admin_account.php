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
    <title>Table Data</title>

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
						   <!--ADMIN ACCOUNT Start-->
                            <div class="au-card-inner">
            
								<div class="row">
											<div class="col-md-12">
												<div class="overview-wrap">
													<h3 class="title-2 m-b-40"><div class="fa fa-camera"></div>&nbsp;&nbsp;ADMIN ACCOUNTS</h3> 
													<a href="register.php">		
													<button class="au-btn au-btn-icon au-btn--green au-btn--small">
													<i class="zmdi zmdi-plus"></i>Add Account</button></a>
												</div>
											</div>
										</div>	
						
								<div class="row m-t-30">
									<div class="col-md-12">
										<div class="table-responsive m-b-40">
											<table class="table table-borderless table-data3">
												<thead>
													<tr>
														<th></th>
														
														<th>ID</th>
														<th>IMAGE</th>
														<th>USERNAME</th>
														
													</tr>
												</thead>
													<div class="table-data-feature">
                                                       
                                                        
                                                        
                                                    </div>          
												<?php
													$res = mysqli_query($link,"SELECT * FROM `admin_login` order by id asc");
													while($row=mysqli_fetch_array($res))
													{
														echo "<tbody>";
															echo "<tr>";
																echo "<td>";?> 
																				<div class="table-data-feature">
																					<a href="delete_a.php?id=<?php echo $row["id"];?>">
																					<button class="item" data-toggle="tooltip" data-placement="top"  title="Delete">
																						<i class="zmdi zmdi-delete"></i>
																					</button> </a>
																					<!--<a href="#">
																					<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
																						<i class="zmdi zmdi-edit"></i>
																					</button>	</a>-->																				
																				</div>
																			<?php 
																echo "</td>";
																
																echo "<td>";echo $row["id"];echo "</td>";
																echo "<td>";?> <img src="<?php echo $row["image"]; ?>" height="100" width="100"> <?php echo "</td>";
																echo "<td>";echo $row["username"];echo "</td>";														
															echo "</tr>";
														echo "</tbody>";
									
													}
													echo "</table>";
												?>
                                
                                        
                                
										</div>
									</div>
								</div>
                        </div>
						<!--ADMIN ACCOUNT End-->
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
