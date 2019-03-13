
			<?php
				
				if(isset($_POST['search']))
				{
					$searchq = $_POST['search'];
					$searchq = preg_replace("#[^0-9a-zA-Z]#i","",$searchq);
					
					$qryc = mysqli_query($link,"SELECT * FROM `add_camera` WHERE brand_name LIKE '%$searchq%' OR price LIKE '%$searchq%' ");					
					while($row = mysqli_fetch_array($qryc))
					{
					?>								
						<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item camera">
					<!-- camera -->
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
					<?php														
					}
						
					$qryh = mysqli_query($link,"SELECT * FROM `add_headphone` WHERE brand_name LIKE '%$searchq%' OR price LIKE '%$searchq%' ");					
					while($row = mysqli_fetch_array($qryh))
					{
					?>								
						<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item headphone">
					<!-- headphone -->
							<div class="block2">
								<div class="block2-pic hov-img0">
									<a href="product_detail_h.php?h_id=<?php echo $row['h_id'];?>">
									<img src="../Air_Admin/<?php echo $row['img1'];?>"  alt="IMG-PRODUCT">							
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
					<?php														
					}
					
					$qryl = mysqli_query($link,"SELECT * FROM `add_laptop` WHERE brand_name LIKE '%$searchq%' OR price LIKE '%$searchq%' ");					
					while($row = mysqli_fetch_array($qryl))
					{
					?>								
						<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item laptop">
					<!-- laptop -->
							<div class="block2">
								<div class="block2-pic hov-img0">
									<a href="product_detail_l.php?l_id=<?php echo $row['l_id'];?>">
									<img src="../Air_Admin/<?php echo $row['img1'];?>"  alt="IMG-PRODUCT">							
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
					<?php														
					}
					
					$qrym = mysqli_query($link,"SELECT * FROM `add_mobile` WHERE brand_name LIKE '%$searchq%' OR price LIKE '%$searchq%' ");					
					while($row = mysqli_fetch_array($qrym))
					{
					?>								
						<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item mobile">
					<!-- mobile -->
							<div class="block2">
								<div class="block2-pic hov-img0">
									<a href="product_detail_m.php?m_id=<?php echo $row['m_id'];?>">
									<img src="../Air_Admin/<?php echo $row['img1'];?>"  alt="IMG-PRODUCT">							
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
					<?php														
					}
					
					$qryp = mysqli_query($link,"SELECT * FROM `add_pendrive` WHERE brand_name LIKE '%$searchq%' OR price LIKE '%$searchq%' ");					
					while($row = mysqli_fetch_array($qryp))
					{
					?>								
						<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item pendrive">
					<!-- mobile -->
							<div class="block2">
								<div class="block2-pic hov-img0">
									<a href="product_detail_p.php?p_id=<?php echo $row['p_id'];?>">
									<img src="../Air_Admin/<?php echo $row['img1'];?>"  alt="IMG-PRODUCT">							
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
							
					<?php														
					}
					
					
				}

			?>
			
			