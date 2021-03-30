<?php
	$ready=readline('Are you ready for a quiz(yes/no)? ');
	if($ready==="yes")
	{
		echo "Okay, here it comes!\n\n";
		echo "Q1) what is the capital of Alaska?\n";
		echo "        1)Melbourne\n        2)Anchorage\n        3)Juneau\n\n";
		$ans=(int)readline('');
		if($ans==3)
		{
			echo "\nThat's right!!!\n\n";
			$count=0;
			$count=$count+1;
		}
		else
		{
			echo "\nSorry, you entered the wrong answer!!!\n\n";
		}
		echo "Q2) Can you store the value Cat in a variable of type int?\n";		
		echo "        1)yes\n        2)no\n\n";
		$ans_2=(int)readline('');
		if($ans_2==2)
		{
			echo "\nThat's right!!!\n\n";
			$count=$count+1;
		}
		else
		{
			echo "\nSorry, Cat is a string. ints can only store numbers\n\n";	
		}
		echo "Q3) What is the result of 9+6/3?\n";
		echo "        1)5\n        2)11\n        3)15/3\n\n";
		$ans_3=(int)readline('');
		if($ans_3==2)
		{
			echo "\nThat's right!!!\n\n";
			$count=$count+1;		
		}
		else
		{
			echo "\nSorry, you entered the wrong answer!!!\n\n";
		}
		if($count==0)
		{
			echo "Overall, you got Zero(0) out of 3 correct.";
		}
		else
		{
			echo "Overall, you got ".$count." out of 3 correct.";
		}
	}
	else
	{
		echo "\nOkay fine you will try next time!";
	}
?>