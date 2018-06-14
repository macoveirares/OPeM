<?php
	 $connect = new mysqli ('localhost', 'root','', 'OPeM');

if($connect -> connect_error)
{
	die('connection failed bruh');
}

$sql="SELECT id,title,image FROM petitions where isApproved=0";


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
			echo '<a href="modelformular.php?id=' . $row['id'] . '"><img src="images/';
			echo $row['image'];
			echo '"></a>';
			echo '</div>';
			echo '</form>';
		}
	}

?>
