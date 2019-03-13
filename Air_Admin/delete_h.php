<?php
include "connection.php";

$hid=$_GET["h_id"];

$res = mysqli_query($link,"SELECT * FROM `add_headphone` WHERE h_id = $hid");
while($row=mysqli_fetch_array($res))
{
	$img1 = $row["img1"];
	$img2 = $row["img2"];
}
unlink($img1);
unlink($img2);

mysqli_query($link,"DELETE FROM `add_headphone` WHERE h_id=$hid");
?>
<script type="text/javascript">
	window.location="table_data.php";
</script>