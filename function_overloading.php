<?php   
//base class or parent class
class abc
{
	public function __construct()
	{
		echo "First class constructer<br>";
	}
}


//Child class
class xyz extends abc
{
	 public function __construct()
	{
		echo "Second class constucter<br>";
	} 
	
	public function test()
	{
		echo "This is test function";
	}
}



//$obj = new abc;

$obj = new xyz;
$obj->test();





?>