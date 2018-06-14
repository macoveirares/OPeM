<?php

 $connect = new mysqli ('localhost', 'root','', 'OPeM');

if($connect -> connect_error)
{
	die('connection failed bruh');
}

if(isset($_REQUEST['search-button']))
{
	$searchq = $_POST['search'];
	$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
	$cid = $_POST['category'];

$sql="SELECT p.id as i,p.title as t,p.image as im,p.expirationDate as ex,count(s.IDPetition) as nr,u.username as u FROM petitions p LEFT join signatures s on p.id=s.IDPetition LEFT JOIN usertopetitions utp on p.id=utp.petitionId LEFT JOIN users u on utp.userId=u.id LEFT JOIN category c on p.categoryId=c.id where c.categoryName='$cid' AND isApproved=1 AND p.title LIKE '%$searchq%' GROUP BY p.id,p.title,p.image,p.expirationDate 
UNION 
	SELECT p.id as i,p.title as t,p.image as im,p.expirationDate as ex,count(s.IDPetition) as nr,u.username as u FROM petitions p RIGHT JOIN signatures s on p.id=s.IDPetition RIGHT JOIN usertopetitions utp on p.id=utp.petitionId Right JOIN users u on utp.userId=u.id RIGHT JOIN category c on p.categoryId=c.id where c.categoryName='$cid' AND isApproved=1 AND p.title LIKE '%$searchq%' GROUP BY p.id,p.title,p.image,p.expirationDate";


$result = $connect->query($sql);

	if($result -> num_rows> 0)
	{
		while($row=$result->fetch_assoc())
		{
			echo '<div class="container-petition">';
			echo '<p class="expires">Expires: '. $row['ex'] . '</p>';
			echo '<p class="signatures">Signatures: ' . $row['nr'] . '/500</p>';
			echo '<h1>' .  $row['t'] . '</h1>';
			echo '<a href="modelformularadmin.php?id=' . $row['i'] . '"><img src="images/';
			echo $row['im'];
			echo '"></a>';
			echo '<p class="created-by">Created By ' . $row['u'] . '</p>';
			echo '</div>';
		}
	}

	else
	{
		echo 'There was no search results!';
	}

}

?>