<!DOCTYPE html>
<html>
<head>
	<title>Petition Model</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="modelformular.css">
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
	
	<div class="container-logo">
		<img src="ogol.png">
	</div>

	<hr class="style-four">

	<div class="container-formular">
		<?php include "formularownpetition.php" ; ?>
	</div>

	<div class="footer">
      <div class="center-footer">
          <ol>
          <li>&copy 2018-2019</li>
          </ol>
      </div>
      <div class="right-footer">
        <ul>
          <li><a href=""><img class="fade" src="http://sundevilgymnastics.com/wp-content/uploads/2016/11/FB-Icon.png"></a></li>
          <li><a href=""><img class="fade" src="http://icons.iconarchive.com/icons/uiconstock/socialmedia/512/Twitter-icon.png"></a></li>
          <li><a href=""><img class="fade" src="http://thoughtmatter.com/wp-content/uploads/2016/05/instagram_logo.png"></a></li>
        </ul>
      </div>
    </div>
</body>
</html>
