<?php
	 $connect = new mysqli ('localhost', 'root','', 'OPeM');

if($connect -> connect_error)
{
	die('connection failed bruh');
}
else 
{
}



$sql="SELECT p.id as i,p.title as t,p.image as im,p.expirationDate as ex,count(s.IDPetition) as nr,u.username as u FROM petitions p LEFT join signatures s on p.id=s.IDPetition LEFT JOIN usertopetitions utp on p.id=utp.petitionId LEFT JOIN users u on utp.userId=u.id where isApproved=1 GROUP BY p.id,p.title,p.image,p.expirationDate 
UNION 
	SELECT p.id as i,p.title as t,p.image as im,p.expirationDate as ex,count(s.IDPetition) as nr,u.username as u FROM petitions p RIGHT JOIN signatures s on p.id=s.IDPetition RIGHT JOIN usertopetitions utp on p.id=utp.petitionId Right JOIN users u on utp.userId=u.id where isApproved=1 GROUP BY p.id,p.title,p.image,p.expirationDate";


$result = $connect->query($sql);

	if($result -> num_rows> 0)
	{
		while($row=$result->fetch_assoc())
		{
			echo '<div class="container-petition">';
			echo '<p class="expires">Expires: '. $row['ex'] . '</p>';
			echo '<p class="signatures">Signatures: ' . $row['nr'] . '/500</p>';
			echo '<h1>' .  $row['t'] . '</h1>';
			echo '<a href="modelformularadmin.php?id=' . $row['i'] . '"><img src="';
			echo $row['im'];
			echo '"></a>';
			echo '<p class="created-by">Created By ' . $row['u'] . '</p>';
			echo '</div>';
		}
	}

?>
