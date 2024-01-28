<?php
include 'connect.php';

if (isset($_POST['bumit'])) {
	$a=$_POST['fname'];
    $b=$_POST['email'];
    $c=$_POST['phone'];
    $d=$_POST['pwd'];
    $e=$_POST['Confirm']; 


     if (empty($_POST['fname']) or empty($_POST['email']) or empty($_POST['phone']) or empty($_POST['pwd']) or empty($_POST['Confirm'])) {

 	echo "<script>alert('Please Fill All Fialed');location.href='registartion.php'</script>";

    }else {

    $select="SELECT * FROM `userside` WHERE email='$b' or phone='$c'";
    $query=mysqli_query($connect,$select);
    $fetch=mysqli_fetch_array($query, MYSQLI_ASSOC);
    $row=mysqli_num_rows($query);

    if ($row) {
    	echo "<script>alert('Email Or Phone Number Has Been allready taken');location.href='registartion.php'</script>";
    }else {
    	
 	if ($d != $e) {

	echo "<script>alert('Password not March');location.href='registartion.php'</script>";
}else {

    $insert="INSERT INTO `userside`(`id`, `name`, `email`, `phone`, `password`, `confirm`) VALUES ( NULL,'$a','$b','$c','$d','$e')";
   $quer=mysqli_query($connect,$insert);

  if ($quer) {
	echo "<script>alert('registartion Successfully');location.href='login.php'</script>";
}else {
	echo "<script>alert('Try Again');location.href='registartion.php'</script>";
}
}

 }
    }

 


}




?>

