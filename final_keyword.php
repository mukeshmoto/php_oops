<?php 

//parent class
class abc
{
	final public function __construct() //use of final keyword
	{
		echo "First class constructor<br>";
	}
	
}

//child class
class xyz extends abc
{
	public function __construct()
	{
		//use of parent keyword
		parent :: __construct(); 
		echo "Second class constructor<br>";
	}
	public  function test()
	{
		echo "This is a test function";
	}
	
}

$obj = new xyz;
$obj->test();






?>