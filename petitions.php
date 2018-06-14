<?php

 $connect = new mysqli ('localhost', 'root','', 'OPeM');

if($connect -> connect_error)
{
	die('connection failed bruh');
}

$name=$_SESSION['name'];
$date=date('Y-m-d');

$sql="SELECT p.id as id ,p.title as title,p.image as image,u.username as name from petitions p join usertopetitions utp on p.id=utp.petitionId join users u on utp.userId=u.id where p.isApproved=1 AND p.expirationDate>'$date'";

$result = $connect->query($sql);

	if($result -> num_rows> 0)
	{
		while($row=$result->fetch_assoc())
		{
			if($row['name']==$name){
				echo '<form>';
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
			else{
				echo '<form>';
			echo '<div class="container-petition">' ;
			echo '<h1>';
			echo $row['title'];
			echo '</h1>';
			echo '<a href="formularUser.php?id=' . $row['id'] . '&username=' . $name . '"><img src="images/';
			echo $row['image'];
			echo '"></a>';
			echo '</div>';
			echo '</form>';
			}
			
		}
	}

?>