<?php
	$weigh=readline('Please enter your current earth weight: ');
	echo "\n";
	echo "I have information for the following planets:\n";
	echo "   1. Venus   2. Mars    3. Jupiter\n";
	echo "   4. Saturn  5. Uranus  4. Neptune\n\n";
	$num=(int)readline('Which planet are you visitting? ');
	echo "\n";	
	switch($num)
	{
		case 1:
			$pound=$weigh*0.78;
			echo "Your weight would be ".$pound." pounds on that planet.";
			break;
		case 2:
			$pound=$weigh*0.39;
			echo "Your weight would be ".$pound." pounds on that planet.";
			break;
		case 3:
			$pound=$weigh*2.65;
			echo "Your weight would be ".$pound." pounds on that planet.";
			break;
		case 4:
			$pound=$weigh*1.17;
			echo "Your weight would be ".$pound." pounds on that planet.";
			break;
		case 5:
			$pound=$weigh*1.05;
			echo "Your weight would be ".$pound." pounds on that planet.";
			break;
		case 6:
			$pound=$weigh*1.23;
			echo "Your weight would be ".$pound." pounds on that planet.";
			break;
		default:
			echo "please enter valid planet number";
	}	
?>