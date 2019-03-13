<section class="sec-relate-product bg0 p-t-45 p-b-105">
		<div class="container">
			<div class="p-b-45">
				<h3 class="ltext-106 cl5 txt-center">
					Related Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
				
				
				
				<?php
			if(isset($_GET['c_id']))
			{
				$cid = $_GET["c_id"];
				$res = mysqli_query($link,"SELECT * FROM `add_camera` order by c_id desc");
				while($row=mysqli_fetch_array($res))
				{
				?>
				<!--camera start-->
					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
								<a href="product_detail_c.php?c_id=<?php echo $row['c_id'];?>" >
									<img src="../Air_Admin/<?php echo $row['img1'];?>" alt="IMG-PRODUCT">								
								</a>
							</div>
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="product_detail_c.php?c_id=<?php echo $row['c_id'];?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										<?php echo $row['brand_name']; ?>
									</a>
									<span class="stext-105 cl3"><div class="fa fa-rupee"></div>
										<?php echo $row['price'];?>
									</span>
								</div>
							</div>
						</div>
					</div>
				<!--camera end-->
				<?php
				}
			}
			else if(isset($_GET['h_id']))
				{
				$hid = $_GET["h_id"];
				$res = mysqli_query($link,"SELECT * FROM `add_headphone` order by h_id desc");
				while($row=mysqli_fetch_array($res))
				{
				?>
				<!--headphone start-->
					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
								<a href="product_detail_h.php?h_id=<?php echo $row['h_id'];?>" >
									<img src="../Air_Admin/<?php echo $row['img1'];?>" alt="IMG-PRODUCT">								
								</a>
							</div>
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="product_detail_h.php?h_id=<?php echo $row['h_id'];?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										<?php echo $row['brand_name']; ?>
									</a>
									<span class="stext-105 cl3"><div class="fa fa-rupee"></div>
										<?php echo $row['price'];?>
									</span>
								</div>
							</div>
						</div>
					</div>
				<!--headphone end-->
				<?php
				}
			}
			else if(isset($_GET['l_id']))
				{
				$lid = $_GET["l_id"];
				$res = mysqli_query($link,"SELECT * FROM `add_laptop` order by l_id desc");
				while($row=mysqli_fetch_array($res))
				{
				?>
				<!--laptop start-->
					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
								<a href="product_detail_l.php?l_id=<?php echo $row['l_id'];?>" >
									<img src="../Air_Admin/<?php echo $row['img1'];?>" alt="IMG-PRODUCT">								
								</a>
							</div>
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="product_detail_l.php?l_id=<?php echo $row['l_id'];?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										<?php echo $row['brand_name']; ?>
									</a>
									<span class="stext-105 cl3"><div class="fa fa-rupee"></div>
										<?php echo $row['price'];?>
									</span>
								</div>
							</div>
						</div>
					</div>
				<!--laptop end-->
				<?php
				}
			}
			else if(isset($_GET['m_id']))
				{
				$mid = $_GET["m_id"];
				$res = mysqli_query($link,"SELECT * FROM `add_mobile` order by m_id desc");
				while($row=mysqli_fetch_array($res))
				{
				?>
				<!--mobile start-->
					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
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
										<?php echo $row['brand_name']; ?>
									</a>
									<span class="stext-105 cl3"><div class="fa fa-rupee"></div>
										<?php echo $row['price'];?>
									</span>
								</div>
							</div>
						</div>
					</div>
				<!--mobile end-->
				<?php
				}
			}
			else if(isset($_GET['p_id']))
				{
				$pid = $_GET["p_id"];
				$res = mysqli_query($link,"SELECT * FROM `add_pendrive` order by p_id desc");
				while($row=mysqli_fetch_array($res))
				{
				?>
				<!--pendrive start-->
					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
								<a href="product_detail_p.php?p_id=<?php echo $row['p_id'];?>">
									<img src="../Air_Admin/<?php echo $row['img1'];?>" alt="IMG-PRODUCT">								
								</a>
							</div>
							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="product_detail_p.php?p_id=<?php echo $row['p_id'];?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										<?php echo $row['brand_name']; ?>
									</a>
									<span class="stext-105 cl3"><div class="fa fa-rupee"></div>
										<?php echo $row['price'];?>
									</span>
								</div>
							</div>
						</div>
					</div>
				<!--pendrive end-->
				<?php
				}
			}
				?>
			
				</div>
			</div>
		</div>
	</section>