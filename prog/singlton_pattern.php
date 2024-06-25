<?php
class abc
{
	private static $instance = null;
	
	private function __construct()
	{
		echo "object created of abc class"."<br>";
	}
	public static function getInstance()
	{
		if(self::$instance === null)
		{
			self::$instance = new abc();
		}
		return self::$instance;
	}
	public function getDetails()
	{
		$get_details = "getDetails function call !";
		return $get_details;
	}
}
$instanc_new = abc::getInstance();
echo $instanc_new->getDetails();
?>