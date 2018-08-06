<!DOCTYPE html>
<html lang="en">

<head>
  <title>channels</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type='text/css' href="css/nav-bar.css">
  <link rel="stylesheet" type='text/css' href="css/base.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>

<body>
  <div class='app-wrapper'>
  
    <?php include("includes/nav-side-bar.html"); ?>
    
    <div class='main-wrapper'>
      <div class='black-overlay'></div>
    <?php include("includes/nav-top-bar.html"); ?>

      <!-- REPLACE UNDER -->
   <div class='background'></div>
       <div class='channel-outer-wrapper'> 
          <div class="button-wrap">
                   <input type='button' value='Following'>
                   <input type='button' value='Popular'>
                   <input type='button' value='Explore'>
          </div>
           <div class="channels-section">
           <?php include("includes/channel-sections.php"); ?>
           </div>
     </div>
      
      
      <!-- REPLACE ON TOP -->
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
    crossorigin="anonymous"></script>
  <script type='text/javascript' src='js/channels.js'></script>
   <script type='text/javascript' src='js/svgs-loader.js'></script>
  <script type='text/javascript' src='js/nav-bar.js'></script>
</body>

</html>