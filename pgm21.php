<?php
	$height=(float)readline('Your height in meter:  ');
	$weight=(int)readline('Your weight in kg:  ');
	$ans=$weight / ($height * $height);
	echo "\n\nYour BMI is ".$ans;
	if($ans<18.5)
	{
		echo "\nBMI Category: Under weight";
	}
	elseif($ans<=24.9)
	{
		echo "\nBMI Category: Normal weight";
	}
	elseif($ans<=29.9)
	{
		echo "\nBMI Category: Over weight";
	}
	else
	{
		echo "\nBMI Category: Obese weight";
	}
?>