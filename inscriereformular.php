<?php
$connect = new mysqli ('localhost', 'root','', 'OPeM');

if($connect -> connect_error)
{
	die('connection failed bruh');
}

session_start();

if(isset($_POST['submit']))
{
	$title= $_POST['title'];
	$description = $_POST['description'];
	$img=$_FILES['image']['name'];

	$categoryname = $_POST['categoryId'];

	$expiration =  date('Y-m-d',strtotime("+ 30 days"));

	$cid = "SELECT id FROM category WHERE categoryName='" . $categoryname . "'";

	$result = $connect->query($cid);

	if($result -> num_rows> 0)
	{
		while($row=$result->fetch_assoc())
		{
			$ca= $row["id"];
		}
	}

	$verify="SELECT title from petitions where title='" . $title . "'";
	$resultVerify=$connect->query($verify);

	if($resultVerify -> num_rows> 0)
	{
		header('location: mainpage.html');
	}
	else
	{
		$sql = "INSERT INTO petitions (title,description,categoryId,expirationDate,image,isApproved) VALUES ('$title','$description','$ca','$expiration','$img','0')";
		if($connect->query($sql)==true)
		{
			move_uploaded_file($_FILES['image']['tmp_name'], "images/$img");
			$last_id = $connect->insert_id;
			$uname= $_SESSION['name'];
			$uid="SELECT id from users where username='" . $uname . "'";
			$result2= $connect->query($uid);
			if($result2 -> num_rows> 0)
			{
				while($rowid=$result2->fetch_assoc())
				{
					$usid= $rowid["id"];
					$insert = "INSERT INTO usertopetitions (userId, petitionId) VALUES ('$usid','$last_id')";
					$connect->query($insert);
				}
		}
			header('location: userlogat.php?username=' . $_SESSION['name']);
		}
	}
}
?>