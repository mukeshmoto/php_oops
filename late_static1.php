<?php


class abc 
{
	public static $table ="login";
	public static $tabl ="SignUp";
	
	public static function insert()
	{
		echo "insert into  ".static::$table."<br>";
		echo "insert into  ".static::$tabl."<br>";
		//self :: select();
	}
	
	public static function select()
	{
		echo "select *from table name";
	}
 
}

          //echo abc :: $table;
          //abc :: insert();
		
		 class xyz extends abc 
		 {
			 public static $table = "Register";
			 public static $tabl = "SignUp";
		 }
	   
	$obj = new xyz;
	$obj->insert();
	

?>



