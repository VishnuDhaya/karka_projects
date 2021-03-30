<?php
	echo "\n";
	$fnum=(float)readline('What is your first number? ');
	$snum=(float)readline('What is your second number? ');
	$thnum=(float)readline('What is your third number? ');
	echo " ( ".$fnum." + ".$snum." + ".$thnum." )"." / 2 is... ";
	$total=($fnum+$snum+$thnum)/2;
	echo $total;
?>