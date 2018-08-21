<?php

class abc
{
	public function __call($method,$parameter)
	{
		if ($method == 'test')
		{
			$count = count($parameter);
			if($count==3)
			{
				echo "You have to provide a three parameter";
			}
			else
			{
				echo "Not match";
			}
				
			
		}
	}
}

$obj = new abc;
$obj->test("Mukesh","Kumar","singh");

?>