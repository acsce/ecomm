<?php
if(isset($_GET['c_id']))
						{				
						
							$shopc_id = $_GET["c_id"];
							
							$res = mysqli_query($link,"SELECT * FROM `add_camera` where c_id = $shopc_id");
							while($row=mysqli_fetch_array($res))
							{
								$a=$row['brand_name'];
								$b=$row['img1'];
								$c=$row['price'];
								#$d=$row['c_id'];
			
							}
							
							
							
							
							mysqli_query($link,"INSERT INTO `user_cart`(`cart_id`, `cart_img`, `cart_name`, `cart_price`, `cart_qty`, `cart_total`) VALUES ('','$b','$a','$c','','')");
							$res = mysqli_query($link,"SELECT * FROM `user_cart` order by cart_id desc");
							while($row=mysqli_fetch_array($res))
							{?>
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="../Air_Admin/<?php echo $row['cart_img'];?>" alt="IMG">
										</div>
									</td>
									<td class="column-2"><?php echo $row['cart_name'];?></td>
									<td class="column-3"><?php echo $row['cart_price'];?></td>
									<td class="column-4">
										
											

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="1">

											
										
									</td>
									<td class="column-5"></td>
								</tr>
							<?php
							}
																					
						}
						#camera cart data end
						
						
						else #headphone cart data start
							if(isset($_GET['h_id']))
						{
								$shoph_id = $_GET["h_id"];
							
							$res = mysqli_query($link,"SELECT * FROM `add_headphone` where h_id = $shoph_id");
							while($row=mysqli_fetch_array($res))
							{
								$a=$row['brand_name'];
								$b=$row['img1'];
								$c=$row['price'];
								#$d=$row['c_id'];
			
							}
							
							
							
							
							mysqli_query($link,"INSERT INTO `user_cart`(`cart_id`, `cart_img`, `cart_name`, `cart_price`, `cart_qty`, `cart_total`) VALUES ('','$b','$a','$c','','')");
							$res = mysqli_query($link,"SELECT * FROM `user_cart` order by cart_id desc");
							while($row=mysqli_fetch_array($res))
							{?>
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="../Air_Admin/<?php echo $row['cart_img'];?>" alt="IMG">
										</div>
									</td>
									<td class="column-2"><?php echo $row['cart_name'];?></td>
									<td class="column-3"><?php echo $row['cart_price'];?></td>
									<td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
											

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="1">

											
										</div>
									</td>
									<td class="column-5"></td>
								</tr>
							<?php
						}
						}
						#headphone cart data end
						
						else #laptop cart data start 
							if(isset($_GET['l_id']))
						{
								$shopl_id = $_GET["l_id"];
							
							$res = mysqli_query($link,"SELECT * FROM `add_laptop` where l_id = $shopl_id");
							while($row=mysqli_fetch_array($res))
							{
								$a=$row['brand_name'];
								$b=$row['img1'];
								$c=$row['price'];
								#$d=$row['c_id'];
			
							}
							
							
							
							
							mysqli_query($link,"INSERT INTO `user_cart`(`cart_id`, `cart_img`, `cart_name`, `cart_price`, `cart_qty`, `cart_total`) VALUES ('','$b','$a','$c','','')");
							$res = mysqli_query($link,"SELECT * FROM `user_cart` order by cart_id desc");
							while($row=mysqli_fetch_array($res))
							{?>
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="../Air_Admin/<?php echo $row['cart_img'];?>" alt="IMG">
										</div>
									</td>
									<td class="column-2"><?php echo $row['cart_name'];?></td>
									<td class="column-3"><?php echo $row['cart_price'];?></td>
									<td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
											

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="1">

											
										</div>
									</td>
									<td class="column-5"></td>
								</tr>
							<?php
						}
						}
						#laptop cart data end
						
						
						else#mobile cart data start
							if(isset($_GET['m_id']))
						{
								$shopm_id = $_GET["m_id"];
							
							$res = mysqli_query($link,"SELECT * FROM `add_mobile` where m_id = $shopm_id");
							while($row=mysqli_fetch_array($res))
							{
								$a=$row['brand_name'];
								$b=$row['img1'];
								$c=$row['price'];
								#$d=$row['c_id'];
			
							}
							
							
							
							
							mysqli_query($link,"INSERT INTO `user_cart`(`cart_id`, `cart_img`, `cart_name`, `cart_price`, `cart_qty`, `cart_total`) VALUES ('','$b','$a','$c','','')");
							$res = mysqli_query($link,"SELECT * FROM `user_cart` order by cart_id desc");
							while($row=mysqli_fetch_array($res))
							{?>
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="../Air_Admin/<?php echo $row['cart_img'];?>" alt="IMG">
										</div>
									</td>
									<td class="column-2"><?php echo $row['cart_name'];?></td>
									<td class="column-3"><?php echo $row['cart_price'];?></td>
									<td class="column-4">
										
											
											
											<input class="text-center" type="text" name="m_q" value="1">
											
										<?php 
										$m = $_GET['m_q'];
										$mm = $row['cart_price'];
										?>
											
										
									</td>
									<td class="column-5"><?php echo "gh"; ?></td>
								</tr>
							<?php
						}
						}
						#mobile cart data end
						
						
						else #pendrive cart data start
							if(isset($_GET['p_id']))
						{
								$shopp_id = $_GET["p_id"];
							
							$res = mysqli_query($link,"SELECT * FROM `add_pendrive` where p_id = $shopp_id");
							while($row=mysqli_fetch_array($res))
							{
								$a=$row['brand_name'];
								$b=$row['img1'];
								$c=$row['price'];
								#$d=$row['c_id'];
			
							}
							
							
							
							
							mysqli_query($link,"INSERT INTO `user_cart`(`cart_id`, `cart_img`, `cart_name`, `cart_price`, `cart_qty`, `cart_total`) VALUES ('','$b','$a','$c','','')");
							$res = mysqli_query($link,"SELECT * FROM `user_cart` order by cart_id desc");
							while($row=mysqli_fetch_array($res))
							{?>
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="../Air_Admin/<?php echo $row['cart_img'];?>" alt="IMG">
										</div>
									</td>
									<td class="column-2"><?php echo $row['cart_name'];?></td>
									<td class="column-3"><?php echo $row['cart_price'];?></td>
									<td class="column-4">
										
											

											<input  type="number" name="num-product1" value="1">

											
										
									</td>
									<td class="column-5"></td>
								</tr>
							<?php
						}
						}
						#pendrive cart data end
						
			#session endif 	
			?>