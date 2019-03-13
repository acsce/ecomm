<?php
include "connection.php";

$pid=$_GET["p_id"];

$res = mysqli_query($link,"SELECT * FROM `add_pendrive` WHERE p_id = $pid");
while($row=mysqli_fetch_array($res))
{
	$img1 = $row["img1"];
	$img2 = $row["img2"];
}
unlink($img1);
unlink($img2);

mysqli_query($link,"DELETE FROM `add_pendrive` WHERE p_id=$pid");
?>
<script type="text/javascript">
	window.location="table_data.php";
</script>