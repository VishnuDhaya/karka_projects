<?php
	$i=1;
	while($i<=100)
	{
		if($i % 3==0)
		{
			echo $i."Fizz\n";
		}
		if($i % 5==0)
		{
			echo $i."Buzz\n";
		}
		if($i % 5==0 and $i % 3==0)
		{
			echo $i."FizzBuzz\n";
		}
		$i++;
	}	
?>