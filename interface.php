<?php

interface a
{
	public function xyz();
}

interface b
{
	public function abc(); 
}

class demo implements a,b
{
	public function xyz()
	{
		echo "This is xyz function<br>";
	}
	
	public function abc()
	{
		echo "This is abc function";
	}
}


$obj = new demo;
$obj->xyz();
$obj->abc();





?>