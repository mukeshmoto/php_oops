<?php
	class abc
	{
		public function demo()
		{
			echo "user defined function<br>";
		}
		
		public function demo1()
		{
			echo "user defined function demo1<br>";
		}
		public function __destruct()
		{
			echo "deconstruct defined function";
		}
		
	}
	
	$obj = new abc();
	$obj->demo();
	$obj->demo1();




?>