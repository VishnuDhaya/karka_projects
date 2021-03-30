<?php
	echo "TWO QUESTIONS!\n";
	echo "Think of object, and I'll try to guess it.\n\n";
	echo "Question 1) Is it animal, vegetable, or mineral?(animal/vegetable/mineral)\n";
	$select=readline('');
	if($select==='animal')
	{
		echo "\nQuestion 2) Is it bigger than a breadbox?(yes/no)\n";
		$ans=readline('');
		if($ans==='yes')
		{
			echo "\nMy guess is that you are thinking of a Moose.\n";
			echo "I would ask you if I'm right, but I don't actually care.\n";
		}
		else
		{
			echo "\nMy guess is that you are thinking of a Mouse.\n";
			echo "I would ask you if I'm right, but I don't actually care.\n";
		}
	}
		
	elseif($select==='vegetable')
	{
		echo "Question 2) Is it bigger than a breadbox?(yes/no)\n";
		$ans=readline('');
		if($ans==='yes')
		{
			echo "\nMy guess is that you are thinking of a Watermelon.\n";
			echo "I would ask you if I'm right, but I don't actually care.\n";
		}
		else
		{
			echo "\nMy guess is that you are thinking of a Carrot.\n";
			echo "I would ask you if I'm right, but I don't actually care.\n";
		}
	}
	elseif($select==='mineral')
	{
		echo "Question 2) Is it bigger than a breadbox?(yes/no)\n";
		$ans=readline('');
		if($ans==='yes')
		{
			echo "\nMy guess is that you are thinking of a Truck.\n";
			echo "I would ask you if I'm right, but I don't actually care.\n";
		}
		else
		{
			echo "\nMy guess is that you are thinking of a Paper clip.\n";
			echo "I would ask you if I'm right, but I don't actually care.\n";
		}
	}
	else
	{
		echo "\n!!!Please enter valid given data!!!\n";
	}		
?>