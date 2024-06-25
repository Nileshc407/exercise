<?php
include('staff.php');
use staffNamespace\staff;
use staffNamespace\member;

class authorization
{
	private $host = "localhost";
	private $username = "root";
	private $pass = "";
	private $database = "exercise";
	
	private $connection;
	public function __construct()
	{
		$this->connection = new mysqli($this->host,$this->username,$this->pass,$this->database);
		
		if($this->connection->connect_error)
		{
			echo "connection failed!";
		}
		else
		{
			echo "connection successful";
		}
	}
	
	function auth()
	{
		echo "Authorization successful!";
	}
	function getData()
	{
		$sql = "call getAllUser()";
		$qry = mysqli_query($this->connection,$sql);
		$result = mysqli_fetch_assoc($qry);
		echo "<pre>";
		echo print_r($result);
	}
}
$aobj = new authorization();
$aobj->auth();
echo "<br>************<br>";

$sobj = new staff();
$result = $sobj->get_staff_details();
$res = json_decode($result);
echo $res->name.' ';
echo $res->id;
echo "<br>************<br>";

$mobj = new member();
$mobj->get_member();

echo "<br>************<br>";
echo $aobj->getData();
?>