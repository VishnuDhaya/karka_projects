<?php
	$height=(float)readline('Your height in meter:  ');
	$weight=(int)readline('Your weight in kg:  ');
	$ans=$weight / ($height * $height);
	echo "\n\nYour BMI is ".$ans;
?>