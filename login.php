<?php

$connect = new mysqli ('localhost','root','','OPeM');
if($connect -> connect_error)
{
	die('Connection failed.');
}
else 
{
	echo 'Connection worked.';
}

$username= $_POST['username'];
$password= $_POST['password'];

session_start();

$sql= "SELECT username,role FROM users WHERE username='$username' AND password='$password'";

$result = $connect->query($sql);

if($result -> num_rows> 0)
{
	while($row=$result->fetch_assoc())
	{
		if($row["role"] == 1)
		{
			header("location:admin.php");
		}
		else 
		{
			$_SESSION['name']=$row['username'];
			header("location:userlogat.php?username=". $_SESSION['name']);
		}
		
	}
}
else 
{
	header("location:errormessage.php");
}

?>