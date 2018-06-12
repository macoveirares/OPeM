<?php
	 $connect = new mysqli ('localhost', 'root','', 'OPeM');

if($connect -> connect_error)
{
	die('connection failed bruh');
}


echo '<li><a href="userpage.php?username='. $_SESSION['name'] .'">';
echo $_SESSION['name'];
echo '</a></li>';



?>
