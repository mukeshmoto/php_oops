<?php
//Protected Visibility
//Base Class or Parent Class
class abc
{
	protected $name = "Protected Visibility";
	
	protected function demo()
	{
		echo "This is protected function";
	}
}
/* 
$obj = new abc;
echo $obj->name;

Here, It will be Error Show, Directly We can not Access 'Protected property' and 'Protected Method'.

 */
 
 //Child Class
 class test extends abc
 {
	 public function xyz()
	 {
		 echo $this->name;
		 echo "<br>";
		 echo $this->demo();
	 }
 }
 
 $obj = new test;
 $obj->xyz();
 //echo $obj->name;      protected property directly do not be Access, it will be Fatal Error Shows.
 
?>