<?php
	function triangle($base,$height)
	{	  
		$ans=($base * $height) / 2;
 		echo "The Triangle Area is: ".$ans;
	}  
	triangle(10,15);
	function square($side)
	{
		$ans=$side * $side;
		echo "\nThe Square Area is: ".$ans;
	}
	square(10);
	function rectangle($length,$width)
	{
		$ans=$length * $width;
		echo "\nThe Rectangle Area is: ".$ans;
	}
	rectangle(14,12);
	function circle($diameter)
	{
		$pi=3.14;
		$ans=$pi * $diameter;
		echo "\nThe Circle Area is: ".$ans;	
	}
	circle(10);
	function trapezium($base_1,$base_2,$height)
	{
		$ans=($base_1 + $base_2) / 2 * $height;
		echo "\nThe Trapezium Area is: ".$ans;	
	}
	trapezium(10,10,45);
?>