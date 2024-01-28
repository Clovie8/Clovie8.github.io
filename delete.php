<?php
include 'connect.php';
if ($_GET['id']) {
	$id=$_GET['id'];

	$delete="DELETE FROM `userside` WHERE id='".$id."'";
	$quel=mysqli_query($connect,$delete);

	if ($quel) {
		echo "<script>alert('Well Done Customer Deleted');location.href='read.php'</script>";
	}else {
		echo "<script>alert('Try Again');location.href='read.php'</script>";
	}
}
?>