<?php
//Private Visibility

class abc
{
	private $name = "Private Property"; 

		private function demo()
		{
			echo "Private function";
			
        }

		public function test()
		{
		    echo "$this->name";
			echo "<br>";
			echo $this->demo();
		}
}
		

$obj = new abc;
$obj->test();


?>