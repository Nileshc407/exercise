<?php
// Singleton pattern ensure that class has only one instance and it should not have multiple access points 
//This is useful when you want to control how many times a class can be inherited, such as for managing database connection, configuration

class singletonPattern
{
    private static $instance = null;
    private function __construct()
    {
        echo "object created!";
    }
    static function getinstance()
    {
      if(!isset(self::$instance))
      {
        return self::$instance = new singletonPattern();
      }
	  else
	  {
		echo "<br> instance is already created!"; 
	  }

    }
	/* function __toString()
	{
		return "object to string conversion occur";
	} */
}
$instance1 =  singletonPattern::getinstance();
$instance2 =  singletonPattern::getinstance();
?>