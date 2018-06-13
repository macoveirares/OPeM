<?php
	
	$connect = new mysqli ('localhost', 'root','', 'OPeM');

if($connect -> connect_error)
{
	die('connection failed bruh');
}
else 
{
}

$name=$_SESSION['name'];
$id = $_GET['id'];
$_SESSION['id']=$id;

$sql = "SELECT title,description from petitions where id=$id";

$result = $connect->query($sql);

if($result -> num_rows> 0)
	{
		while($row=$result->fetch_assoc())
		{
			echo '<form method="POST">';
			echo '<div class="container-title">';
			echo '<h1>';
			echo $row['title'];
			echo '</h1>';
			echo '</div>';
			echo '<hr class="style-four">';
			echo '<div class="container-paragraph">';
			echo '<p>';
			echo $row['description'];
			echo '</p>';
			echo '</div>';
			echo '<hr class="style-four">';
			echo '<div class="container-sign">';
			echo '<input type="submit" value="Edit" name="edit">';
			echo '</div>';
			echo '</form>';
		}
	}

if (isset($_POST['edit']))
{
	$userid="SELECT id from users where username='$name'";
	$result2 = $connect->query($userid);
	if($result2 -> num_rows> 0)
	{
		header('location:editformular.php?id=' . $id);
	}
}

?>
