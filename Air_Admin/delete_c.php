<?php
include "connection.php";

$cid=$_GET["c_id"];

$res = mysqli_query($link,"SELECT * FROM `add_camera` WHERE c_id = $cid");
while($row=mysqli_fetch_array($res))
{
	$img1 = $row["img1"];
	$img2 = $row["img2"];
}
unlink($img1);
unlink($img2);
mysqli_query($link,"DELETE FROM `add_camera` WHERE c_id=$cid");
?>
<script type="text/javascript">
	window.location="table_data.php";
</script>