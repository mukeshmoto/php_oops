<?php

class abc
{
	public function abc()
	{
		echo "user defined constructer<br>";
	}
	
	public function demo()
	{
		echo "user defined function";
	}
	
	/* public function __construct()
	{
	   echo "pre defined constructer<br>";
	} */
}

 $obj = new abc();
 //$obj->abc();
 $obj->demo();
 

?>