<?php
	function add_keychain()
	{
			print "\n\nYou have 0 keychains. How many to add? \n";
			$key=explode(' ', readline());
			echo "You now have ".$key[0]." keychains\n\n";
	}
	function remove_keychain()
	{
			print "\n\nYou have $key keychains. How many to remove? ";
			$remove=(int)readline('');
			$remains=$key[0] - $remove;
			echo "\nYou have ".$remains." keychains\n\n";
	}
	function view_order()
	{
			print "\n\nYou have ".$remains." keychains.\n";
			echo "Keychains cost $10 each.\n";
			$cost=$remains * 10;
			echo "Total cost is ".$cost."\n\n";
	}
	function checkout()
	{
			print "\n\nCHECK OUT\n\n";
			$name=readline('What is your name? ');
			echo "You have ".$remain." keychains.\n";
			echo "Keychains cost $10 each.\n";
			echo "Total cost is ".$cost;
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