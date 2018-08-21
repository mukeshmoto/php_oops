<?php
//Public Visiblity

class abc
{
	public $name = "public visibility";
	
	public function demo()
	{
		echo "This is public function<br>";
	}
}


$obj = new abc;
$obj->demo();
echo $obj->name;






?>