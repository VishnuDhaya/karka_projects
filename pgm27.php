<?php
	function add_keychain()
	{
			print "\n\nYou have 0 keychains. How many to add? \n";
			$key=(int)readline('');
			echo "You now have ".$key." keychains\n\n";
			remove_keychain($key);
	}
	function remove_keychain($key_1)
	{
			print "\n\nYou have ".$key."keychains. How many to remove? ";
			$remove=(int)readline('');
			$key_1=$key_1-$remove;
			echo "\nYou have ".$key_1." keychains\n\n";
			view_order($key_1);
	}
	function view_order($key_2)
	{
			print "\n\nYou have ".$key_2." keychains.\n";
			echo "Keychains cost $10 each.\n";
			$cost=$key_2 * 10;
			echo "Total cost is ".$cost."\n\n";
			checkout($cost,$key_2);
	}
	function checkout($cost_1,$key_3)
	{
			print "\n\nCHECK OUT\n\n";
			$name=readline('What is your name? ');
			echo "You have ".$key_3." keychains.\n";
			echo "Keychains cost $10 each.\n";
			echo "Total cost is ".$cost_1;
			echo "\nThanks for your order, ".$name."!";		
	}
	$i=1;
	while($i<=10)
	{
		echo "Ye Olde Keychain Shoppe\n\n";
		echo "1. Add Keychains to Order\n";
		echo "2. Remove Keychains from Order\n";
		echo "3. View Current Order\n";
		echo "4. Checkout\n\n";
		echo "Please enter your choice:(1/2/3/4)";
		$num=readline('');
		if($num=='1')
		{
			add_keychain();
		}
		elseif($num=='2')
		{	
			remove_keychain();
		}
		elseif($num=='3')
		{
			view_order();
		}
		elseif($num=='4')
		{
			checkout();
			break;
		}
		else
		{		
			echo "Please enter the valid given data";
		}
		$i++;
	}

?>