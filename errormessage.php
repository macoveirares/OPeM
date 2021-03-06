<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
</head>
<body>
  <div class="navbar">
    <ul>
        <li><a class="active" href="mainpage.html">Home</a></li>
        <li><a href="petitions.html">Petitions</a></li>
        <li><a href="inscriereformular.html">Create Petition</a></li>
      </ul>
      <ol>
        <li><a href="login.html">Login</a></li>
        <li><a href="signup.html">Sign Up</a></li>
      </ol>
  </div>

  <div class="container-logo">
    <img src="ogol.png">
  </div>

  <hr class="style-four">

  <div class="container-username">
    <h3>Username or Password incorrect.</h3>
  </div>

  <form action = "login.php" action="admin.php" method = "POST">
    <div class="container-username">
      <input name="username" class="username" type="text" placeholder="Username" size="28" required>
    </div>
    <div class="container-password">
      <input name="password" type="password" class="password" placeholder="Password" required size="28">
    </div>
    <div class="container-login">
      <input type="submit" class="login-btn" value="Login">
    </div>
  </form>
  <div class="container-create">
    <p>You don't have an account? <a href="signup.html">Create account</a></p>
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