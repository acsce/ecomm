<?php 
include "connection.php";
?>
<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">						
						<i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<i class="fa fa-google-plus"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<i class="fa fa-instagram"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</div>

					<div class="right-top">
						<i class="fa fa-envelope"></i>   prakashupadhyayabl@gmail.com
						<i class="fa fa-envelope"></i>   naykodelingraj@gmail.com					
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->							
					<h3>AIR Shopping</h3>
					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="index.php">Home</a>								
							</li>
							<li>
								<a href="product_display.php">Shop</a>								
							</li>
							<li>
								<a href="about.php">About</a>
							</li>
							<li>
								<a href="contact.php">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						
						<?php 
						 if($_SESSION['user'])
						{
							$res1 = mysqli_query($link,"SELECT * FROM `user_login` WHERE username='$_SESSION[user]'");
							while($row1=mysqli_fetch_array($res1))
							{
								$user_id = $row1['id'];
							}
						}
						$qry = mysqli_query($link,"SELECT * FROM `user_cart` WHERE cart_user_id='$user_id'");
						$row = mysqli_num_rows($qry);
						
						?>
						<i>Welcome <?php echo $_SESSION["user"] ; ?></i>
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="<?php echo $row;?>">
							<a href="shoping_cart.php">
							<i class="zmdi zmdi-shopping-cart"></i></a>
						</div>
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-6" >
							 
							<a  href="user_logout.php">
							<i style="text-size:10px;" class="fa fa-sign-in-alt"></i>Logout</a>
						</div>
					</div>
				</nav>
			</div>	
		</div>