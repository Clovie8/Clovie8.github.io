<?php
session_start();

include'connect.php';

if (isset($_POST['mutti'])) {
	
	$a=$_POST['email'];
	$b=$_POST['pwd'];

	if (empty($email=$_POST['email']) or empty($email=$_POST['pwd'])) {
		echo "<script>alert('Please Fill All Fialed');location.href='login.php'</script>";
	}else {
		
		$select="SELECT * FROM `userside` WHERE email='$a' and password='$b'";
		$query=mysqli_query($connect,$select);
        $fetch=mysqli_fetch_array($query, MYSQLI_ASSOC);
        $row=mysqli_num_rows($query);

		if ($row) {
			$_SESSION['email'] = $_POST['email'];
			header('location:oneset.php');
		}else {
			$select="SELECT * FROM `admin` WHERE email='$a' and password='$b'";
		$query=mysqli_query($connect,$select);
        $fetch=mysqli_fetch_array($query, MYSQLI_ASSOC);
        $row=mysqli_num_rows($query);

		if ($row) {
			$_SESSION['email'] = $_POST['email'];
			header('location:read.php');
		}else {
			echo "<script>alert('Try again, Invalid Credential!');location.href='login.php'</script>";
		}
		}
	}
}

?>