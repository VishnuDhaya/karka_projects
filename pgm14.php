<?php
	echo "WELCOME TO MITCHELL'S TINY ADVENTURE!";
	echo "You are in a creepy house! Would you like to go upstairs or into the kitchen ?(kitchen/upstairs)\n";
	$select=readline('');
	if($select==='kitchen')
	{
		echo "\n\nThere is a long countertop with dirty dishes everywhere. off to one side\n";
		echo "there is, as you'd except, a refrigerator. You may open the refrigerator\n";
		echo "or look in a cabinet(refrigerator / cabinet).\n";
		$second=readline('');		
		if($second==='refrigerator')
		{
			echo "\n\nInside the refrigerator you see food and stuff. It looks pretty nasty.\n";
			echo "Would you like to eat some of the food?(yes / no)\n";
			$final=readline('');
			if($final==='yes')
			{
				echo "\n\nOkay have your Food!!!\n";
			}
			else
			{
				echo "\n\nYou die of starvation...  eventually.\n";
			}	
		}
		else
		{
			echo "\n\nInside the Cabinet only have Books and News papers.\n";
		}
	}
	else
	{
		echo "\n\nUpstairs rooms are so dirty you go to the kitchen.";
	}
?>