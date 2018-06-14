<?php 
	$connect = new mysqli ('localhost', 'root','', 'OPeM');

if($connect -> connect_error)
{
	die('connection failed bruh');
}

$sql = "SELECT title,description from petitions where id= '" . $id . "'";

$result = $connect->query($sql);

if($result -> num_rows> 0)
	{
		while($row=$result->fetch_assoc())
		{
			echo '<li><a href="https://twitter.com/intent/tweet?text=' . $row['title'] . '                                                                                                                               ' . $row['description'] . '"data-size="large"><img class="fade" src="http://icons.iconarchive.com/icons/uiconstock/socialmedia/512/Twitter-icon.png"></a></li>';
		}
	}
	
?>
