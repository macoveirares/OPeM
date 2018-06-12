<?php
	 $connect = new mysqli ('localhost', 'root','', 'OPeM');

if($connect -> connect_error)
{
	die('connection failed bruh');
}
else 
{
}

require_once("tcpdf/tcpdf.php");
$pdf = new TCPDF();

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor("my author");
$pdf->SetTitle("raport.pdf");
$pdf->SetSubject("x");
$pdf->SetKeywords("a, b, c");

// set default header data
$pic = "/images/pupaza.jpg";
$pdf->SetHeaderData(realpath($pic), "25", "Petitii");

// set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    //set auto page breaks
 $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

 //set image scale factor
 $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

 // add a page
 $pdf->AddPage();

 // set font
 $pdf->SetFont("helvetica", "", 12);

 // set a background color
 $pdf->SetFillColor(230, 240, 255, true);

$pdf->SetFont("", "b", 16);


$File=fopen('file.html', 'a');

$sql="SELECT p.title as t,c.categoryName as cn,p.description as d,p.expirationDate as e,count(s.IDPEtition) as si,count(r.PetitionID) as r ,u.username as us from petitions p LEFT JOIN category c on p.categoryId=c.id LEFT JOIN signatures s on s.IDPetition=p.id LEFT JOIN reports r on r.PetitionID=p.id LEFT JOIN usertopetitions utp on p.id=utp.petitionId LEFT JOIN users u on utp.userId=u.id where isApproved=1 GROUP BY p.title,p.image,c.categoryName,p.description,p.expirationDate ";

$result = $connect->query($sql);

	if($result -> num_rows> 0)
	{
		while($row=$result->fetch_assoc())
		{
			$Content= '<p>' . $row['r'] . '<p>' .
			 '<p>' . $row['d'] . '<p>' .
			 '<p>' . $row['cn'] . '<p>' .
			 '<div class="container-petition">' .
			 '<p class="expires">Expires: '. $row['e'] . '</p>' .
			 '<p class="signatures">Signatures: ' . $row['si'] . '/500</p>' .
			 '<h1>' .  $row['t'] . '</h1>' .
			 '<p class="created-by">Created By ' . $row['us'] . '</p>' .
			'</div>';
			$PDFContent = 'Title of petition : ' . $row['t'] . "\n" .
						  'Category : ' . $row['cn'] . "\n" .
						  'Expires at : ' . $row['e'] . "\n" .
						  'Number of signatures : ' . $row['si'] . "\n" .
						  'Number of reports : ' . $row['r'] . "\n" .
						  'Description : ' . $row['d'] . "\n" ;
			$Status = fwrite($File, $Content);
			$pdf->Write(16, "$PDFContent\n", "", 0, 'C');
		}
	}
	$pdf->Output("raport.pdf", "I");
	header('location:admin.php');
	

?>