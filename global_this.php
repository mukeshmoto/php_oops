<?php

	class test{
		public $name;
		
		public function demo($a)
		{
			//global $name;
			 $this->name=$a;
			echo "<br>";
			//echo $a;
		}
		
		public function xyz()
		{
			//global $name;
			//echo $this->name;
			$this->name;
			//echo $a;
		}
	}

	$obj = new test;
	echo $obj->demo ("Mukesh kumar singh");
	
	$obj->xyz();
	echo $obj->name;
  


?>