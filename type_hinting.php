<?php
/* $a = "Hello";
echo $a;
var_dump($a);
 */

 class a 
 {
	 public function abc()
	 {
		 echo "This is abc function<br>";
	 }
	 public function xyz()
	 {
		 echo "This is xyz function";
	 }
	 
 }

      function demo($obj)
	  {
		  $obj->abc();
		  $obj->xyz();
	  }
	  
 $obj =new a;
 demo($obj);




?>