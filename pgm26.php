<?php
	function add_keychain($choice)
	{
		if($choice=='1')
		{
			print "\n!!!ADD KEYCHAINS!!!\n";
		}
	}
	function remove_keychain($choice)
	{
		if($choice=='2')
		{
			print "\n!!!REMOVE KEYCHAINS!!!\n";
		}
	}
	function view_order($choice)
	{
		if($choice=='3')
		{
			print "\n!!!VIEW CURRENT ORDER!!!\n";
		}
	}
	function checkout($choice)
	{
		if($choice=='4')
		{
			print "\n!!!CHECK OUT!!!\n";
		}
	}
	$i=1;
	while($i<=10)
	{
		echo "Ye Olde Keychain Shoppe\n\n";
		echo "1. Add Keychains to Order\n";
		echo "2. Remove Keychains from Order\n";
		echo "3. View Current Order\n";
		echo "4. Checkout\n\n";
		echo "Please enter your choice:(1/2/3/4)\n\n";
		$num=readline('');
		if($num=='1')
		{
			add_keychain(1);
		}
		elseif($num=='2')
		{	
			remove_keychain(2);
		}
		elseif($num=='3')
		{
			view_order(3);
		}
		elseif($num=='4')
		{
			checkout(4);
			break;
		}
		else
		{		
			echo "Please enter the valid given data";
		}
		$i++;
	}
?>