<?php 
session_start();

    if(isset($_SESSION['email']))
    {
        header("location:oneset.php");
        die();
    }

$u = "";
$p = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'corner');


// login user

if (isset($_POST['mutti'])) {
$u = mysqli_real_escape_string($db, $_POST['email']);
$p = mysqli_real_escape_string($db, $_POST['pwd']);

if (empty($u)) { array_push($errors, "Username is required"); }
if (empty($p)) { array_push($errors, "Password is required"); }

if (count($errors) == 0) {
  $p = md5($p);
  $query = "SELECT * FROM `userside` WHERE email='$u' and password='$p'";
  $results = mysqli_query($db, $query);
  if (mysqli_num_rows($results) == 1) {
      
    $_SESSION['email'] = $u;
    header("location: oneset.php");
  }else {
    array_push($errors, "Wrong username./password combination");
  }
}
}


?>