<?php
require('vendor/autoload.php');
// use mpdf\mpdf;
phpinfo();
$conn = new mysqli('localhost','root','','exercise');
if($conn){
	$query = mysqli_query($conn,'select * from user_master');
	if(mysqli_num_rows($query)>0)
	{
		$html = "<table border='1'>";
		$html .="<tr><th>name</th><th>phone</th><th>email</th></tr>";
		while($row = mysqli_fetch_assoc($query))
		{
			$html .="<tr><td>".$row['name']."</td><td>".$row['contact']."</td><td>".$row['email']."</td></tr>";
		}
		$html .="</table>";
	}
	else
	{
		$html = 'data not found!';
	}
}
else
{
	echo 'db connection failed!';
}
/* $mpdf = new \mpdf\mpdf();
$mpdf->WriteHTML($html);
$file = time().'.pdf';
$mpdf->output($file,'D'); */
?>