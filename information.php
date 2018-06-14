<?php
	
	$connect = new mysqli ('localhost', 'root','', 'OPeM');

if($connect -> connect_error)
{
	die('connection failed bruh');
}

$name=$_SESSION['name'];
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
			echo '<input type="submit" value="Sign" name="sign">';
			echo '<input type="submit" value="Report" name="report">';
			echo '</div>';
			echo '</form>';
		}
	}

if (isset($_POST['sign']))
{
	$userid="SELECT id from users where username='" . $name . "'";
	$result2 = $connect->query($userid);
	if($result2 -> num_rows> 0)
	{
		while($row2=$result2->fetch_assoc())
		{
			$uid=$row2['id'];
			$sql3= "SELECT * FROM signatures WHERE IDUser='$uid' AND IDPetition='" . $id . "'";
			$result3 = $connect->query($sql3);
			if($result3 -> num_rows> 0)
			{
				header("location: alreadysigned.php?id=" . $id . "&username=" . $name );
			}
			else
			{
				$update="INSERT INTO signatures (IDUser,IDPetition) VALUES ('$uid','$id')";
			$connect->query($update);
			header("location:mypetitions.php?username=" . $name);
			}
			
		}
	}
}
if (isset($_POST['report']))
{
	$userid="SELECT id from users where username='" . $name . "'";
	$result2 = $connect->query($userid);
	if($result2 -> num_rows> 0)
	{
		while($row2=$result2->fetch_assoc())
		{
			$uid=$row2['id'];
			$sql3= "SELECT * FROM reports WHERE UserID='$uid' AND PetitionID='" . $id . "'";
			$result3 = $connect->query($sql3);
			if($result3 -> num_rows> 0)
			{
				header("location: alreadyreported.php?id=" . $id . "&username=" . $name );
			}
			else
			{
				$update="INSERT INTO reports (UserID,PetitionID) VALUES ('$uid','$id')";
			$connect->query($update);
			header("location:mypetitions.php?username=" . $name);
			}
			
		}
	}
}


?>
