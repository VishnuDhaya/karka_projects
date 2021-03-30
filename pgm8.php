<?php
	echo "Hey, What's your name?";
	$name=readline('');
	echo "\n";
	echo "Ok, ".$name.", how old are you? ";
	$age=(int)readline('');
	echo "\n";
	if($age<=16)
	{
		echo "You can't drive, ".$name."\n";
		echo "You can't vote, ".$name."\n";
		echo "You can't rent a car, ".$name."\n";
	}
	elseif($age<=18)
	{
		echo "You can't vote, ".$name."\n";
		echo "You can't rent a car, ".$name."\n";
	}
	elseif($age<=25)
	{
		echo "You can't rent a car, ".$name."\n";
	}	
	else
	{
		echo "You can do anything that's legal";
	}
?>