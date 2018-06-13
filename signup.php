<?php
$connect = new mysqli ('localhost', 'root',
'', 'OPeM');

if($connect -> connect_error)
{
	die('connection failed bruh');
}
else 
{
	echo 'connection worked';
}

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$firstname= $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	$year = $_POST['year'];
	$gender = $_POST['radio'];

	$date=date_create((string)$year . "-" . (string)$month . "-" . (string)$day);
	$newformat = date_format($date,"Y-m-d");

	$sql = "INSERT INTO users (firstname,lastname,username,password,birthday,gender,role) VALUES ('$firstname','$lastname','$username','$password','$newformat','$gender','user')";
	if($connect->query($sql)==true)
	{
	header("location: login.html");
	}
	else 
{
	echo "sugi kuku";
}
}
?>