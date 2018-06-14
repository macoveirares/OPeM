<!DOCTYPE html>
<html>
<head>
	<title>My petitions</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="userpage.css">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
</head>
<body>
	<div class="navbar">
		<ul>
  			<?php include "redirect.php" ; ?>
  		</ul>
  		<ol>
        <li><a href="mainpage.html">Logout</a></li>
        <?php include "name.php" ; ?>
  		</ol>
	</div>
	
	<div class="container-first">
    <h1 class="h1-text"><i>Your signed petitions :</i></h1> 
	</div>


  <hr class="style-four">
	<div class="container-imgs">
		  <?php include 'userpetitions.php'; ?>
	</div>

<hr class="style-four">
  <div class="container-first">
    <h1 class="h1-text"><i>Your posted petitions :</i></h1> 
  </div>

  <hr class="style-four">
  <div class="container-imgs">
    <?php include 'createdpetitions.php' ?>
  </div>


	<div class="footer">
      <div class="center-footer">
          <ol>
          <li>&copy 2018-2019</li>
          </ol>
      </div>
      <div class="right-footer">
        <ul>
          <li><a href="https://www.facebook.com"><img class="fade" src="FB-Icon.png"></a></li>
          <li><a href="https://www.twitter.com"><img class="fade" src="Twitter-icon.png"></a></li>
          <li><a href="https://www.instagram.com"><img class="fade" src="instagram_logo.png"></a></li>
        </ul>
      </div>
    </div>
</body>
</html>