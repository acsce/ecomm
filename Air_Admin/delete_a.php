<?php
include "connection.php";

$id=$_GET["id"];

$res = mysqli_query($link,"SELECT * FROM `admin_login` WHERE id = $id");
while($row=mysqli_fetch_array($res))
{
	$img1 = $row["image"];
	
}
unlink($img1);


mysqli_query($link,"DELETE FROM `admin_login` WHERE id=$id");
?>
<script type="text/javascript">
	window.location="table_data.php";
</script>