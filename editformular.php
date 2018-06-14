<!DOCTYPE html>
<html>
<head>
	<title>Write your petition</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="inscriereformular.css">
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
	<form action="editownformular.php" method="POST" enctype="multipart/form-data">	 
		<h1>Petition Title</h1>
		<p>Something catchy and not too long</p>
		<?php include 'title.php'; ?>
		<hr class="style-four">
		<h1>Petition text</h1>
		<p>Don't worry if you don't have the final text ready now. You can always fine tune it later.</p>
		<?php include 'description.php'; ?>
		<hr class="style-four">
		<h1>Featured Image</h1>
		<div class="imgbox">
				<p class="dragtext">Drag image here</p>
				<h6>or</h6>
   		 			<input type="file" name="image">
		</div>
		<hr class="style-four">
		<div class="container-select">
    		<select name="categoryId">
   			  <option value="">Others</option>
    		  <option value="Economics">Economics</option>
   			  <option value="Military">Military</option>
   			  <option value="Politics">Politics</option>
   			  <option value="Health">Health</option>
   			  <option value="Education">Education</option>
   			</select>
 		</div>
 		<hr class="style-four">
		<div class="container-btn">
			<input class="submit-btn" type="submit" value="Save" name="save">
		</div>
	</form>
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