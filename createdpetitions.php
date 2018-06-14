<?php 

$connect = new mysqli ('localhost', 'root','', 'OPeM');

if($connect -> connect_error)
{
	die('connection failed bruh');
}

error_reporting(0);
ini_set('display_errors', 0);

$uname= $_SESSION['name'];

$uid="SELECT id from users where username= '" . $uname . "'";
$result2= $connect->query($uid);
if($result2 -> num_rows> 0)
{
	while($rowid=$result2->fetch_assoc())
	{
		$id=$rowid['id'];
		$sql="SELECT p.id,p.title,p.image from petitions p join usertopetitions utp on p.id=utp.petitionId where p.isApproved=1 AND utp.userId= '" . $id . "'";
		$result = $connect->query($sql);

		if($result -> num_rows> 0)
		{
			while($row=$result->fetch_assoc())
			{
				echo '<form">';
				echo '<div class="container-petition">' ;
				echo '<h1>';
				echo $row['title'];
				echo '</h1>';
				echo '<a href="ownpetition.php?id=' . $row['id'] . '"><img src="images/';
				echo $row['image'];
				echo '"></a>';
				echo '</div>';
				echo '</form>';
			}
		}
	}
}