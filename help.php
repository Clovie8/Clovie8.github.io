<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="help.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <script src="upper.js"></script>
    <title>DIGITAL_CORNER</title>

    

</head>
<body>

  <section class="headn">
    <a href="" class="lig">Digital Corner</a>
    <input type="checkbox" id="check">
    <label for="check" class="cons">
      <i class="fas fa-bars" id="menu-icon"></i>
      <i class="fas fa-times" id="close-icon"></i>
    </label>

    <nav class="barn">
      <a href="oneset.php" class="active">Home</a>
      <a href="services.php" >service</a>
      <a href="abouts.php" >About</a>
      <a href="help.php" >Help</a>
      <a href="logout.php"><i class="fas fa-right-to-bracket" id="user"></i></a>
    </nav>
  </section>



  <section>
    <div class="head">
       <h1>Help center</h1>
    </div>
  </section>



  <section>
    <div class="comment">

        <div class="put">
            <form action="">


              <div class="ment"> 
                <p>Leaver a Comment</p>
              </div>
            
                 <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" placeholder="Enter Email"> <br>
                    <span class="input_error">Not a valid Email</span>
                  </div>

                  <div class="form-group">
                    <label for="">Reason:</label>
                    <input type="text" name="co-reason" placeholder="Enter Reason" required>
                  </div>

                
                   <label for="">Comment:</label>
                   <textarea name="co-com" id="comm" cols="30" rows="10" placeholder="Comment..." required></textarea>
                

                <div class="meet">
                    <input type="submit" name="co-sub" value="Send">
                </div>
        </form>
        </div>

        <div class="account">

          <div class="containel">
            <h2>How can we help you ?</h2>

            <div class="search">
              <div class="icon">
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
              <input type="search" name="search" placeholder="search...">
            

            <div class="list">
              <ul>
                <li><i class="fa-solid fa-user"></i>Personal Inf</li>
                <li><i class="fa-solid fa-gear"></i> Managing Your Account</li>
                <li><i class="fa-solid fa-file"></i>Guides & Resourses</li>
                <li><i class="fa-solid fa-book"></i>Tearms & Conditions</li>
                <li><i class="fa-solid fa-lock"></i>Privacy And Security</li>
                <li><i class="fa-solid fa-wrench"></i>Support</li>
                <li><i class="fa-solid fa-phone"></i>Contact As</li>
              </ul>
            </div>
          </div>
          </div>
          
        </div>
    </div>
  </section>

        
       



        <footer>  
        <div class="footer">
          <div class="contact">
            <p>Contact As</p>
            <ul>
    
              <li>Email:dkndclovis8@gmail.com</li>
              <li>Phone:079789797897</li>
              <li>Adderss: Kigali - Rwanda KG 11 st</li>
              
            </ul>
          </div>

          <div class="center">
            <p>Digital corner</p>
            <ul>
              <li>About As</li>
              <li>Tearms @ Conditions</li>
              <li>services</li>
              <li>training</li>
              <li>camps</li>
            </ul>
          </div>

          <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3" class="map">
            <p>Location</p>
            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                var setting = {"query":"Kwa Rwahama 1, Kigali, Rwanda","width":199,"height":129,"satellite":false,"zoom":12,"placeId":"ChIJoZ4aqAan3BkR9q8sNZvzacc","cid":"0xc769f39b352caff6","coords":[-1.95352,30.11918],"lang":"en","queryString":"Kwa Rwahama 1, Kigali, Rwanda","centerCoord":[-1.95352,30.11918],"id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"1040857"};
                var d = document;
                var s = d.createElement('script');
                s.src = 'https://1map.com/js/script-for-user.js?embed_id=1040857';
                s.async = true;
                s.onload = function (e) {
                  window.OneMap.initMap(setting)
                };
                var to = d.getElementsByTagName('script')[0];
                to.parentNode.insertBefore(s, to);
              })();</script><a href="https://1map.com/map-embed">1 Map</a></div>


          <div class="follow">
            
            <p>Follow As</p>
            <ul>
              <li><i class="fa-brands fa-facebook"></i></li>
              <li><i class="fa-brands fa-instagram"></i></li>
              <li><i class="fa-brands fa-youtube"></i></li>
              <li><i class="fa-brands fa-twitter"></i></li>
              <li><i class="fa-brands fa-tiktok"></i></li>
            </ul>
          </div>

        </div>

        <div class="copy">
          <span>All CopyRight &copy Reserved 2023, Desiged & Developed by Clovie8</span>
        </div>

        </footer>
    
</body>
</html>