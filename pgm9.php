<?php
	echo "Weekday 1: Sunday\n";
	echo "Weekday 2: Monday\n";
	echo "Weekday 3: Tuesday\n";
	echo "Weekday 4: Wednesday\n";
	echo "Weekday 5: Thursday\n";
	echo "Weekday 6: Friday\n";
	echo "Weekday 7: Saturday\n";
	echo "Weekday 0: Saturday\n\n";
	echo "Weekday 43: error\n";
	echo "Weekday 17: error\n";
	echo "Weekday -1: error\n\n";
	$num=(int)readline('');
	switch($num)
	{
		case 1:
			echo "Today is Sunday!";
			break;
		case 2:
			echo "Today is Monday!";
			break;
		case 3:
			echo "Today is Tuesday!";
			break;
		case 4:
			echo "Today is Wednesday!";
			break;
		case 5:
			echo "Today is Thursday!";
			break;
		case 6:
			echo "Today is Friday!";
			break;
		case 7:
			echo "Today is Saturday!";
			break;
		case 0:
			echo "Today is Saturday!";
			break;
		case 43:
			echo "Error 43";
			break;
		case 17:
			echo "Error 17";
			break;
		case -1:
			echo "Error -1";
			break;
		default:
			echo "Plz Enter any given number!!!";
	}
?>