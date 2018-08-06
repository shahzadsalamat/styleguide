<!DOCTYPE html>
<html lang="en">

<head>
  <title>Feedback</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type='text/css' href="css/nav-bar.css">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
   <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


</head>

<body>

 <div class='app-wrapper'>
    
    <?php include("includes/nav-side-bar.html"); ?>
    
    <div class='wrapper'>
      <div class="black-overlay"></div>
      <?php include("includes/nav-top-bar.html"); ?>
         <!-- REPLACE UNDER -->
       
       <div class="feedback-wrapper">
         <div class="background">
         </div>
         <div class="feedback-divs-wrapper"> 
            <div class="height-fix">
               <div class="feedback-social-icon-wrp">
                    <a class="feedback-social-icon" href="#">
                      <i class="fa fa-twitter"></i></a>
                    <a class="feedback-social-icon" href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a class="feedback-social-icon" href="#">
                   	 <i class="fa fa-instagram"></i>
                    </a>  
              </div>
              <div class="feedback-title">
                <h2>SEND FEEDBACK</h2>
              </div>
               <div class="feedback-subtitle">
                <h5>Your feedback is very important to us.</h5>
              </div>
           <form class="feedback-form">
            <div class='feedback-input-wrapper'>
              <svg class='icon' version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <use xlink:href='#profile'></use>
                  </svg>
              <input type='text' placeholder="Name">
            </div>
            <div class='feedback-input-wrapper'>
              <svg class='icon' version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <use xlink:href='#email'></use>
              </svg>
              <input type='email' placeholder="Email">
            </div>
             <div class='feedback-input-wrapper-2'>
                <input class="feedback-message" placeholder="write something...">
                <span class="feedback-send-button"></span>
            </div>
          </form>
    </div>
     <div class="feedback-map-wrapper">
       <div class="feedback-map" id="map"></div>
     </div>
    </div> 
  </div>
  
   <!-- REPLACE ON TOP -->
 </div>
</div>
  
  <script type="text/javascript" src="js/map.js"></script>
  <script type="text/javascript"
    src="http://maps.googleapis.com/maps/api/js?libraries=geometry&sensor=false&key=AIzaSyBSsKUzYG_Wz7u2qL6unHqfBOmvaZ0H1Mg&callback=initMap"></script>
  <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFxBSTTS8-q2X2D8ZkF-0QFTH64QjD5eM&callback=initMap">
  </script> 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
    crossorigin="anonymous"></script>
  <script type='text/javascript' src='js/svgs-loader.js'></script>
  <script type='text/javascript' src='js/nav-bar.js'></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"></script>

</body>
</html>




