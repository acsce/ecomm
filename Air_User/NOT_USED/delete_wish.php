<?php
include "connection.php";

$wid=$_GET["wish_id"];

$res = mysqli_query($link,"SELECT * FROM `user_wishlist` WHERE wish_id = $wid");
while($row=mysqli_fetch_array($res))
{
	$img1 = $row["wish_img"];
	 
}
unlink($img1);


mysqli_query($link,"DELETE FROM `user_wishlist` WHERE wish_id=$wid");
?>
<script type="text/javascript">
	window.location="wishlist.php";
</script>