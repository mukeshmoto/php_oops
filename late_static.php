<?php

class abc 
{
	public static $table ="login";
	
	public static function insert()
	{
		//echo "This is insert function";
		echo "insert into  ".self::$table."<br>";
		self :: select();
	}
	
	public static function select()
	{
		echo "select *from table name";
	}
 
}

          //echo abc :: $table;
          abc :: insert();
		  // echo abc :: $table;
	   


?>