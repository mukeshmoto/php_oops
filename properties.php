<?php 

	//Creating a Class
	class a{
		public $abc = "Hello Mukesh"; 
	
    //Creating a function	
		public function test() 
		{
			echo $this->abc;
			echo "<br>";
		}
	}
	
	
	//Calling a function
	$obj = new a();
	$obj->test();
	
	//echo $obj->abc;
	
	


?>