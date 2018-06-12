<?php

 $connect = new mysqli ('localhost', 'root','', 'OPeM');

if($connect -> connect_error)
{
    die('connection failed bruh');
}

session_start();

echo '<li><a class="active" href="mainpage.php?username=' .  $_SESSION['name'] . '">Home</a></li>';
echo '<li><a href="mypetitions.php?username=' .  $_SESSION['name'] . '">Petitions</a></li>';    
echo '<li><a href="inscriereformularUser.php?username=' .  $_SESSION['name'] . '">Create petition</a></li>';      

    
?>