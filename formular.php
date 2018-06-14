<?php 

$connect = new mysqli ('localhost', 'root','', 'OPeM');

if($connect -> connect_error)
{
    die('connection failed bruh');
}


$name=$_GET['username'];

echo '<button class="create-btn"><a href="inscriereformularUser.php?username=' . $name . '">Create petition</a></button>';

 ?>