<?php
	 $connect = new mysqli ('localhost', 'root','', 'OPeM');

if($connect -> connect_error)
{
	die('connection failed bruh');
}

$sql="SELECT p.id as i,p.title as t,p.image as im,count(r.PetitionID) as nr FROM petitions p join reports r on p.id=r.PetitionID where isApproved=1 GROUP BY p.id,p.title,p.image";

$result = $connect->query($sql);

	if($result -> num_rows> 0)
	{
		while($row=$result->fetch_assoc())
		{
			echo '<div class="container-petition">';
			echo '<p class="expires">Reports: '. $row['nr'] . '</p>';
			echo '<h1>' .  $row['t'] . '</h1>';
			echo '<a href="modelformularadmin.php?id=' . $row['i'] . '"><img src="images/';
			echo $row['im'];
			echo '"></a>';
			echo '</div>';
		}
	}

?>
