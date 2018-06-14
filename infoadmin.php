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
			echo '<input type="submit" value="Delete" name="delete">';
			echo '</div>';
			echo '</form>';
		}
	}


	if(isset($_POST['delete'])){
		$deleteutp="DELETE FROM usertopetitions WHERE petitionId='" . $id . "'";
		$connect->query($deleteutp);
		$delete="DELETE FROM reports WHERE PetitionID='" . $id . "'";
		$connect->query($delete);
		$deletes="DELETE FROM signatures WHERE IDPetition='" . $id . "'";
		$connect->query($deletes);
		$deletep="DELETE FROM petitions WHERE id='" . $id . "'";
		if($connect->query($deletep)==true)
		{
			header("location:admin.php");
		}
		else{
			echo "Error deleting record: " . $connect->error;
		}
	}
?>
