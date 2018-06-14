<?php
	
	$connect = new mysqli ('localhost', 'root','', 'OPeM');

if($connect -> connect_error)
{
	die('connection failed bruh');
}

$id = $_GET['id'];

$sql = "SELECT title,description from petitions where id='" . $id . "'";

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
			echo '<input type="submit" value="Approve" name="approve">';
			echo '<input type="submit" value="Disapprove" name="disapprove">';
			echo '</div>';
			echo '</form>';
		}
	}

if (isset($_POST['approve']))
{
	$update="UPDATE petitions SET isApproved=1 WHERE id='" . $id . "'";
	$connect->query($update);
	header("location:admin.php");
}
else if(isset($_POST['disapprove']))
{
	$deleteutp="DELETE FROM usertopetitions WHERE petitionId='" . $id . "'";
	$connect->query($deleteutp);
	$delete="DELETE FROM petitions WHERE id = '" . $id . "'";
	if($connect->query($delete)==true)
	{
		header("location:admin.php");
	}
	else{
		echo "Error deleting record: " . $connect->error;
	}
}


?>
