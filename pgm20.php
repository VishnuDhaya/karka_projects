<?php
	echo "I will add up the numbers you give me.\n";
	$number=(int)readline('Number: ');
	$add=0;
	while($number != 0)
	{
		$add=$add + $number;
		echo "\nThe total so far is :".$add."\n";
		$number=(int)readline('Number: ');
	}
	echo "\nThe total is ".$add;
?>