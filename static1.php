<?php

class abc
{
	public static $table = "Login";
	
	public static function demo()
	{
		echo " This is static function login<br>";
		echo "This is static function " . self ::$table;
	}
	
}

class xyz extends abc
{
	

	public static function hello()
	{
		echo "This is hello function";
		
	}
}


echo xyz :: $table;
echo xyz :: hello();
//echo abc :: demo();







?>