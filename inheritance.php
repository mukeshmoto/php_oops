<?php
//Base or Parent class

class car
{
	public $car_name = "honda";
	
	public function car_color()
	{
		echo "This is car<br>";
	}
}

//Child class
class engine extends car
{
	public function eng()
	{
		echo "This is engine of car";
	}
}

$obj = new engine();
$obj->car_color();
$obj->eng();

//echo $obj->car_name;

?>