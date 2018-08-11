<!DOCTYPE html>
<html lang="en">

<head>
  <title>calender</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type='text/css' href="css/nav-bar.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity=   "sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="http://jqwidgets.com/public/jqwidgets/styles/jqx.base.css">   
  <link rel="stylesheet" type="text/css" href="css/calender-css/jqx.energyblue.css">
  <link rel="stylesheet" type="text/css" href="css/base.css">
</head>

<body>
  <div class='gb-outer-wrapper'>
  
    <?php include("includes/nav-side-bar.html"); ?>
    
    <div class='wrapper'>
      <div class="black-overlay"></div>
      <div class='nav-bar-wrapper'>
        <div class='burger'>
          <span class='burger-line'></span>
          <span class='burger-line-small'></span>
          <span class='burger-line'></span>
        </div>
        <div class='logo'>
          <svg class='logo' version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <use xlink:href='#logo'></use>
          </svg>
        </div>
        <div class='nav-bar-right'>
       		 <div class='calender'>
               <i class="fa fa-calendar fa-lg" aria-hidden="true"></i>
             </div>
          <div class='search'>
            <svg class='search' version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <use xlink:href='#search'></use>
            </svg>
          </div>
          <div class='nav-avatar'>
            <img src='images/profile.jpg' alt='avatar'>
          </div>
        </div>
      </div>
      
      <!-- REPLACE UNDER -->
      <div class="gb-right-navbar">
          <div class="calender-container">
               <div class="close-right-navbar">
				    <i class="fa fa-window-close fa-lg" aria-hidden="true"></i>                      
               </div> 
               <div id='jqxCalendar'></div>
              <div>
                 <input style="margin-top: 20px;" type="button" id='jqxButton' value="Today"/>              </div>
           </div>
      </div>

       <?php include("includes/content.html"); ?>
       
      <!-- REPLACE ON TOP -->
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
    crossorigin="anonymous"></script>
  <script type='text/javascript' src='js/svgs-loader.js'></script>
  <script type='text/javascript' src='js/nav-bar.js'></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="js/calender-js/calender.js"></script>
  <script type="text/javascript" src="js/calender-js/globalize.js"></script>
  <script type="text/javascript" src="js/calender-js/jqx-all.js"></script>
  
</body>

</html>