<!DOCTYPE html>
<html>
<head>
	<title>OPeM</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="mainpage.css">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
</head>
<body>
	<div class="navbar">
		<ul>
  			<?php include "redirect.php"; ?>
  		</ul>
  		<ol>
  			<li><a href="mainpage.html">Logout</a></li>
        <?php include "name.php" ; ?>
  		</ol>
  		<img class="size fade-in one" src="worldimg.jpg">
  	</div>

  	<div class="container-first">
  		<h1 class="h1-text">Your petition can change the World</h1> 
  	</div>
  	<div class="container-first">
      <?php include 'formular.php'; ?>
  	</div>
  	<div class="container-first">
  		<h1 class="h1petition">How Petitions Work</h1>
  	</div>

  	<hr class="style-four">

    <div class="container-numere">
  		<div class="left">
  			<p class="circle">1</p>
  		</div>
  		
      <div class="center">
  			<p class="circle">2</p>
  		</div>
  		
      <div class="right">
  			<p class="circle">3</p>
  		</div>

  		<div class="left-text">
  			<h3>Create a petition</h3>
  			<p>Online Petitions Take Citizen Participation to New Levels</p>
  		</div>

  		<div class="center-text">
  			<h3>Gather Signatures</h3>
  			<p>Share your petition with others, build a community for the change you want to make.</p>
  		</div>

  		<div class="right-text">
  			<h3>Achieve Your Goal</h3>
  			<p>We are helping and supporting you in order to fulfill your wishes.</p>
  		</div>
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

