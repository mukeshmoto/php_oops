<?php

class abc
 {
	public function a()
	{
		echo "This is A  function<br>";
		/* var_dump($this);
		return $thus;
		exit; */
		return $this;
		
	}

	public function b()
	{
		echo "This is B  function<br>";
		return $this;
	}

	public function c()
	{
		echo "This is C  function<br>";
		
	}

}
 //Normal Calling
/* $obj = new abc;
$obj->a();
$obj->b();
$obj->c(); */


//Method Chaining Calling
$obj = new abc;
$obj->a()->b()->c();



?>