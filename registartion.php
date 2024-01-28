<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registartion.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <title>DIGITAL_CORNER</title>
</head>
<body>


 


    <div class="move">
        <div class="in_form">

            <form action="userregist.php" method="POST">

              <div class="hand">
                <h2>Digital Corner</h2>
              </div>

              <div class="cover">

            <p>Register Here</p>
          </div>
            <br>

            <div class="form-group">
                <i id="email" class="fa fa-user"></i>
                <input type="text" name="fname"  placeholder="Enter Full Name">
                <span class="input_error">Enter First Name</span>
              </div>


            <div class="form-group">
              <i id="email" class="fa fa-envelope"></i>
              <input type="email" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" placeholder="Enter Email">
              <span class="input_error">Not a valid Email</span>
            </div>


            <div class="form-group">
                <i id="email" class="fa fa-phone"></i>
                <input type="text" name="phone" pattern="(?=.*\+)(?=.*[0-9]).{13}" maxlength="13" placeholder="Enter Phone Number">
                <span class="input_error">Country Code(+250)</span>
              </div>  


            <div class="form-group">
              <i class="fa fa-key"></i>
              <input type="password" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" maxlength="10" placeholder="Enter Password">
              <span class="input_error">1-0, A-Z & a-z, min 10 chars</span>
            </div>


            <div class="form-group">
                <i class="fa fa-key"></i>
                <input type="password" name="Confirm" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Confirm Password">
                <span class="input_error">Password Don't match</span>
              </div>

                                <br>
        
        
            
              <input type="checkbox" data-required="true" required><label for="">&nbsp Agree with<a class="link" href="">Terms&Conditions</a> </label>
               
                
               
                                <br>
                           

            <div class="log">
               <input type="submit" name="bumit" value="SignUp">
            </div>

                         <br>

            <p>Have an account <a href="login.php">LogIn</a> </p>

        </form>
        </div>
    </div>


        <span class="last">All &copy copylight resverved 2023. </span>
     
    

</body>
</html>