<?php
	/**
	* @Description: Writing PHP Function with Parameters
	* @References:
	*    https://www.tutorialspoint.com/php/php_functions.htm
	*
	*/
	function addFunction($num1, $num2) 
	{
		$sum = $num1 + $num2;
		echo("Sum of the two numbers is : $sum");
	}

	addFunction(10, 20);
?>
