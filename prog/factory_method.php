<?php
//factory method
abstract class Vehical
{
	protected $name;
	public function getName()
	{
		return $this->name;
	}
	abstract function start();
}
class car extends Vehical
{
	public function __construct()
	{
		$this->name = 'Car';
	}
	public function start()
	{
		return "Starting the car...";
	}
}
class Motercycle extends Vehical
{
	public function __construct()
	{
		$this->name = 'Motercycle';
	}
	public function start()
	{
		return "Starting the Motercycle...";
	}
}
class VehicleFactory
{
	public static function create($vehicalType)
	{
		switch($vehicalType)
		{
			case 'car':
			return new Car();
			case 'motercycle':
			return new Motercycle();
			default:
			throw new Exception('Invalid vehical type. ');
		}
	}
}
$car = VehicleFactory::create('car');
echo $car->getName().":  ".$car->start()."<br>";

$motercycle = VehicleFactory::create('motercycle');
echo $motercycle->getName().":  ".$motercycle->start()."<br>";
?>