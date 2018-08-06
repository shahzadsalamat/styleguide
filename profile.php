<!DOCTYPE html>
<html lang="en">

<head>
  <title>profile</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type='text/css' href="css/nav-bar.css">
  <link rel="stylesheet" type='text/css' href="css/base.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<body>
  <div class='app-wrapper'>
    
      <?php include("includes/nav-side-bar.html"); ?>
    
    <div class='wrapper'>
      <div class='black-overlay'></div>
      <?php include("includes/nav-top-bar.html"); ?>
      
      <!-- REPLACE UNDER -->
        <div class="profile-outer-wrapper">
	       <div class="profile-inner-wrapper">
            	<div class="close-profile">
						<i class="fa fa-window-close fa-lg" aria-hidden="true"></i>           
                </div>
    			<div class="profile-avatar">
                        <img src="Images/profile.jpg" class="profile-avatar-image">
           	    </div>
                <div class='profile-title'>
                    <h2>CREATE ACCOUNT</h2>
                    <p> photographer</p>
                </div>
            	 <div class='profile-statics'>
                   <div class="profile-comments">
                        <h2>26</h2>
                        <p>comments</p>
                   </div>
                   <div class="profile-channels">
                        <h2>26</h2>
                        <p>channels</p>
                   </div>
                   <div class="profile-bookmarks">
                        <h2>26</h2>
                        <p>bookmarks</p>
                   </div>
                 </div>
            		<form>
           				 <input type='submit' value='Continue'>
                   </form>
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
  <script type='text/javascript' src='js/profile.js'></script>
</body>
</html>