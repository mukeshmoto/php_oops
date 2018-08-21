<?php

abstract class abc
{
	public abstract function test();
	
	public function demo()
	{
		echo "this is demo function";
	}
}

class xyz extends abc
{
		public function test()
		{
			echo "This is test function comming from base class<br>";
		}

}

$obj = new xyz;
$obj->test();
$obj->demo();



?>