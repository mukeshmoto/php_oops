<?php

interface a
{
	public function xyz();
}

interface b
{
	public function abc();
}

interface c extends a,b
{
	public function d();
}


class demo implements c
{
	public function xyz()
	{
		echo "This is xyz function<br>";
	}
	
	public function abc()
	{
		echo "This is abc function<br>";
	}
	
	public function d()
	{
		echo "This is d function<br>";
	}
}

$obj = new demo;
$obj->xyz();
$obj->abc();
$obj->d(); 

?>