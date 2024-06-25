<?php
namespace db1Namespace;
class db
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
}
$obj = new db();
?>