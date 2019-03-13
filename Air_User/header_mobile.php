<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<h3>AIR Shopping</h3>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">	
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
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="<?php echo $row;?>">
					<a href="shoping_cart.php">
						<i class="zmdi zmdi-shopping-cart"></i>
					</a>
				</div>				
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>