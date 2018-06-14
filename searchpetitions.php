<?php

 $connect = new mysqli ('localhost', 'root','', 'OPeM');

if($connect -> connect_error)
{
	die('connection failed bruh');
}

$name=$_SESSION['name'];

if(isset($_REQUEST['search-button']))
{
	$searchq = $_POST['search'];
	$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
	$cid = $_POST['category'];

$sql="SELECT p.id as id,p.title as title, p.image as image from petitions p join category c on p.categoryId=c.id where c.categoryName='$cid' AND p.isApproved=1 AND p.title LIKE '%$searchq%'";

$result = $connect->query($sql);

	if($result -> num_rows> 0)
	{
		while($row=$result->fetch_assoc())
		{
			echo '<div class="container-petition">' ;
			echo '<h1>';
			echo $row['title'];
			echo '</h1>';
			echo '<a href="formularUser.php?id=' . $row['id'] . '&username=' . $name . '"><img src="images/';
			echo $row['image'];
			echo '"></a>';
			echo '</div>';
		}
	}
	else
	{
		echo 'There was no search results!';
	}

}

?>