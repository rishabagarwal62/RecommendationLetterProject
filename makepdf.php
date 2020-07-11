<?php



//<img src="C:\xampp\htdocs\RecomendationLetterProject\DSC_8296.jpg" width="90mm" />
require_once __DIR__ . '/vendor/autoload.php';

//Grab variables

$ename = $_POST['ename'];
$eaddress1 = $_POST['eaddress1'];
$eaddress2 = $_POST['eaddress2'];
$date = $_POST['date'];

$letterHead = $_POST['letterHead'];
$letterBody = $_POST['letterBody'];
$letterConclusion = $_POST['letterConclusion'];

$pname = $_POST['pname'];
$pdesignation = $_POST['pdesignation'];
$pdepartment = $_POST['pdepartment'];
$uname = $_POST['uname'];
$uaddress = $_POST['uaddress'];


//Create pdf instance
$mpdf = new \Mpdf\Mpdf(['format' => 'A4']);




//Create our PDF
$data = '';

$data.= '<br><br><br><br><h3 style="text-align: center"><u>LETTER OF RECOMMENDATION<u></h3>';

//Add data

$data .='<p margin:0 style="text-align: left">To,<br></p>';
$data .= $ename . '<br />';
$data .= $eaddress1 . '<br />';
$data .= $eaddress2 . '<br />';
$data .= $date . '<br /> <br /> <br />';

$data .= $letterHead . '<br /> <br />';
$data .= $letterBody . '<br /> <br />';
$data .= $letterConclusion . '<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />';

$data .= $pname . '<br />';
$data .= $pdesignation . '<br />';
$data .= $pdepartment .'<br />';
$data .= $uname .'<br />';
$data .= $uaddress .'<br />';

//$data .= '<strong>First Name</strong>' . $fname . '<br />';
//$data .= '<strong>Last Name</strong>' . $lname . '<br />';
//$data .= '<strong>Email</strong>' . $email . '<br />';
//$data .= '<strong>Message</strong>' . $message . '<br />';


if ($letterHead==0) {
	# code...
	$data.='';
}

//Write PDF
$mpdf->WriteHTML($data);
//$mpdf->Image('\smit_logo.png', -5, 0, 120, 30, 'jpg', '', true, false);
$mpdf->Image('\logo.png', -5, 0, 50, 30, 'jpg', '', true, false);
$mpdf->Image('\line.png', -30, 10.8, 280, 40, 'jpg', '', true, false);
$mpdf->Image('\line.png', -30, 267, 280, 40, 'jpg', '', true, false);




//Output to browser
$mpdf->Output('RLetter.pdf', 'D');
