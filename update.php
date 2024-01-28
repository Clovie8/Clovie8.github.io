<!DOCTYPE html>
<html>
<head>
  <title>Digital Admin Panel</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="registartion.css">
</head>
<body>


<?php 
 include 'connect.php';
 $id=$_GET['id'];
 $sele="SELECT * FROM `userside` WHERE id='".$id."'";
  $quel=mysqli_query($connect,$sele);
  $fech=mysqli_fetch_array($quel);

        $s=$fech['id'];
        $d=$fech['name'];
        $f=$fech['email'];
        $g=$fech['phone'];
        $h=$fech['password'];  
        $j=$fech['confirm'];

 ?>

  <div class="move_form">
    
    <form action="#" method="POST">

              <div class="hand">
                <h2>Digital Corner</h2>
              </div>

              <div class="cover">

            <p>Update User</p>
          </div>
            <br>

            <div class="form-group">
                <i id="email" class="fa fa-user"></i>
                <input type="text" name="fname"  placeholder="Enter Full Name" value="<?php echo("$d"); ?>">
                <span class="input_error">Enter First Name</span>
              </div>


            <div class="form-group">
              <i id="email" class="fa fa-envelope"></i>
              <input type="email" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" value="<?php echo("$f"); ?>" placeholder="Enter Email">
              <span class="input_error">Not a valid Email</span>
            </div>


            <div class="form-group">
                <i id="email" class="fa fa-phone"></i>
                <input type="text" name="phone" pattern="(?=.*\+)(?=.*[0-9]).{13}" maxlength="13" value="<?php echo("$g"); ?>" placeholder="Enter Phone Number">
                <span class="input_error">Country Code(+250)</span>
              </div>  


            <div class="form-group">
              <i class="fa fa-key"></i>
              <input type="password" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" maxlength="10" value="<?php echo("$h"); ?>" placeholder="Enter Password">
              <span class="input_error">1-0, A-Z & a-z, min 10 chars</span>
            </div>


            <div class="form-group">
                <i class="fa fa-key"></i>
                <input type="password" name="Confirm" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="<?php echo("$j"); ?>" placeholder="Confirm Password">
                <span class="input_error">Password Don't match</span>
              </div>

                                <br>
                           

            <div class="log">
               <input type="submit" name="updt" value="Update">
            </div>

                         <br>

            

        </form>
  </div>

  <?php
  include 'connect.php';

  if (isset($_POST['updt'])) {
    $x=$_POST['fname'];
    $y=$_POST['email'];
    $z=$_POST['phone'];
    $a=$_POST['pwd'];
    $b=$_POST['Confirm'];

    $update="UPDATE `userside` SET `name`='$x',`email`='$y',`phone`='$z',`Password`='$a',`Confirm`='$b' WHERE id='".$id."'";
    $quel=mysqli_query($connect,$update);

    if ($quel) {
      header('location:read.php');
    }else {
      echo "<script>alert('Try Again');location.href='update.php'</script>";
    }
  }

  ?>

 </body>
 </html>


