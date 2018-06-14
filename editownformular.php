<?php
$connect = new mysqli ('localhost', 'root','', 'OPeM');

if($connect -> connect_error)
{
	die('connection failed bruh');
}

session_start();

$id=$_SESSION['id'];

if(isset($_POST['save']))
{
	$title= $_POST['title'];
	$description = $_POST['description'];
	$img=$_FILES['image']['name'];

	$categoryname = $_POST['categoryId'];

	$cid = "SELECT id FROM category WHERE categoryName= '" . $categoryname . "'";

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
		$sql = "UPDATE petitions SET title='$title' , description='$description' , categoryId='$ca' , image='$img' WHERE id='" . $id"'";
		if($connect->query($sql)==true)
		{
			header('location: userpage.php?username=' . $_SESSION['name']);
		}
		else{
			header('location:mainpage.html');
		}
		
	}
}
?>