<?php
	
	$connect = new mysqli ('localhost', 'root','', 'OPeM');

if($connect -> connect_error)
{
	die('connection failed bruh');
}

$id=$_GET['id'];

$sql = "SELECT title from petitions where id='" . $id . "'";
$result= $connect->query($sql);
if($result -> num_rows> 0)
{
	while($row=$result->fetch_assoc())
	{
		$title=$row['title'];
		echo '<input name="title" type="text" class="titleinput" value="' . $title . '" required>';
	}
}

?>