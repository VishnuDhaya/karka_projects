<?php
	function add()
	{
		$num_1=(int)readline('Enter the First Number: ');
		echo "\n";
		$num_2=(int)readline('Enter the Second Number:');
		$ans=$num_1 + $num_2;
		echo "Addition number is:".$ans;
	}
	function sub()
	{
		$num_1=(int)readline('Enter the First Number: ');
		echo "\n";
		$num_2=(int)readline('Enter the Second Number:');
		$ans=$num_1 - $num_2;
		echo "Subtration number is:".$ans;
	}
	function mul()
	{
		$num_1=(int)readline('Enter the First Number: ');
		echo "\n";
		$num_2=(int)readline('Enter the Second Number:');
		$ans=$num_1 * $num_2;
		echo "Multiplication number is:".$ans;
	}
	function div()
	{
		$num_1=(int)readline('Enter the First Number: ');
		echo "\n";
		$num_2=(int)readline('Enter the Second Number:');
		$ans=$num_1 / $num_2;
		echo "Division number is:".$ans;
	}
	function square()
	{
		$num_1=(int)readline('Enter the Number: ');
		$ans=$num_1 * $num_1;
		echo "Square number is:".$ans;
	}
	function square_root()
	{
		$num_1=(int)readline('Enter the Number: ');
		$ans=sqrt($num_1);
		echo "Square Root number is:".$ans;
	}
	$i=1;
	while($i<=10)
	{
		echo "\n\nThe Calculator\n";
		echo "Addition:\n";
		echo "Subtraction:\n";
		echo "Multiplication:\n";
		echo "Division:\n";
		echo "Square A number:\n";
		echo "Square Root of A number:\n";
		echo "Enter your choice: (+,-,*,/,^,^3)";
		$str=readline('');
		switch($str)
		{
			case '+':
				add();
				break;
			case '-':
				sub();
				break;
			case '*':
				mul();
				break;
			case '/':
				div();
				break;
			case '^':
				square();
				break;
			case '^3':
				square_root();
				break;
			default:
				echo "\n!!!Please enter the given data!!!";		
		}
		$i++;
	}
?>