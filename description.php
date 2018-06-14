<?php
	
	$connect = new mysqli ('localhost', 'root','', 'OPeM');

if($connect -> connect_error)
{
	die('connection failed bruh');
}

$id=$_GET['id'];

$sql = "SELECT description from petitions where id= '" . $id . "'";
$result= $connect->query($sql);
if($result -> num_rows> 0)
{
	while($row=$result->fetch_assoc())
	{
		$description=$row['description'];
		echo '<textarea name="description" class="editor" required>' . $description . '</textarea>';
	}
}

?>