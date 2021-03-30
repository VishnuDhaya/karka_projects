<?php
	echo "I will add up the numbers you give me.\n";
	$arr=[];
	$i=1;
	while($i<=10)
	{
		$arr=explode(' ',readline('Number:'));
		echo "The total so far is ".$num."\n";
		$i++;
	}
?>