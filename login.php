<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <title>LogIn_Form</title>
</head>
<body>

    <div class="move">
        <div class="in_form">

            <form action="userlogin.php" method="POST">

              <div class="hand">
                <h2>Digital Corner</h2>
              </div>

          <div class="banger">
            <p>LogIn Here</p>
          </div>

            <br>

            <div class="form-group">
              <i id="email" class="fa fa-envelope"></i>
              <input type="email" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" placeholder="Enter Email">
              <span class="input_error">Not a valid Email</span>
            </div>

     

            <div class="form-group">
              <i class="fa fa-key"></i>
              <input type="password" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" maxlength="10" placeholder="Enter Password">
              <span class="input_error">1-0, A-Z & a-z, min 10 chars</span>
            </div>

        
<br>            
            
                <input type="checkbox">
                <label for="">Remember Me</label>
                <span> &nbsp  Forget <a href="">Password</a> </span>

                           

            <div class="log">
               <input type="submit" name="mutti" value="Login">
            </div>

                         <br>

            <p>Don't have an account <a href="registartion.php">SignUp</a> </p>

        </form>
        </div>
    </div>

         <div class="last">
            <span>All &copy copylight resverved 2023. </span>
         </div>
        
     
    

</body>
</html>