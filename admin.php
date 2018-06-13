<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <script src="jquery-3.3.1.min.js"></script>
</head>
<body>
	<div class="navbar">
  		<ol>
        <li><a href="mainpage.html">Logout</a></li>
  			<li><a href="admin.html">Admin</a></li>
  		</ol>
	</div>
	
	<div class="container-first">
    <h1 class="h1-text"><i>Approval :</i></h1> 
	</div>

  <hr class="style-four">
	<div class="container-imgs">
		<?php include "adminpage.php" ; ?>
	</div>

<hr class="style-four">
  <div class="container-first">
    <h1 class="h1-text"><i>Managing Petitions :</i></h1> 
  </div>
  <form action="" method="post">
    <div class="container-search">
      <input type="text" name="search" placeholder="Search for a petition..." required>
      <input type="submit" value=">>" name="search-button" />
    </div> 
    <hr class="style-four">
    <div class="container-select">
      <select name="category">
        <option value="Economics">Economics</option>
        <option value="Military">Military</option>
        <option value="Politics">Politics</option>
        <option value="Health">Health</option>
        <option value="Education">Education</option>
        <option value="Others">Others</option>
      </select>
    </div>
  </form>


  <div class="container-imgs">
    <?php include 'searchpetitionsadmin.php'; ?>
  </div>
    <hr class="style-four">
  <div class="container-imgs">
    <?php include "adminpetitions.php" ; ?>
  </div>

  <hr class="style-four">

  <div class="container-first">
    <h1 class="h1-text"><i>Reported Petitions :</i></h1> 
  </div>
  <hr class="style-four">
  <div class="container-imgs">
    <?php include "reportedpetitions.php" ; ?>
  </div>

  <hr class="style-four">
  <div class="container-first">
      <form action="download.php" method="POST">
        <input type="submit" name="download" value="Download Statistics">
      </form>
  </div>

  <hr class="style-four">


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