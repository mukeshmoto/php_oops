<?php

interface shape
{
	public function calarea();
}

class circle implements shape
{
	public $radius;
	
	public function __construct($r)
	{
		$this->radius=$r;
	}
	public function calarea()
	{
		return 3.14*$this ->radius*$this ->radius;
	}
}

$obj  = new circle(10);
echo $obj->calarea();

?>