<?php
namespace staffNamespace;
class staff
{
	public function __construct()
	{
		$this->staff_name = "Staff admin";
		$this->id = "S105bq7";
	}
	public function get_staff_details()
	{
		return json_encode(array("id"=>$this->id,"name"=>$this->staff_name));
	}
}
class member extends staff
{
	public function get_member()
	{
		echo $this->staff_name." member function call!";
	}
}

?>