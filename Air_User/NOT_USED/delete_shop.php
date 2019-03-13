<?php
include "connection.php";

$cid=$_GET["cart_id"];

mysqli_query($link,"DELETE FROM `user_cart` WHERE cart_id=$cid");
?>
<script type="text/javascript">
	window.location="shoping_cart.php";
</script>