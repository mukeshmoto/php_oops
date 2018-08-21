<?php


interface shape
{
	public function calarea();
}

class rectangle implements shape
{
	public $length;
	public $brth;
	
	public function __construct($r)
	{
		$this->length=$r;
		$this->brth   =$r;
		
	}
	public function calarea()
	{
		return $this->length*$this ->brth;
	}
}

$obj  = new rectangle(10);
echo $obj->calarea();




?>