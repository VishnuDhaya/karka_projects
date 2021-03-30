<?php
	$gender=readline('What is your gender (M or F):');
	switch($gender)
	{
		case 'M':
			$fname=readline('First Name: ');
			$lname=readline('Last Name: ');
			$age=readline('Age: ');
			if($age>=20)
			{
				echo "Then I shall call you Mr. ".$fname." ".$lname;
			}
			else
			{
				echo "Then I shall call you ".$fname." ".$lname;
			}
			break;
		case 'F':
			$fname=readline('First Name: ');
			$lname=readline('Last Name: ');
			$age=readline('Age: ');
			if($age>=20)
			{
				echo "\n\nAre you married, ".$fname." (y or n)?";
				$marry=readline('');
				if($marry==='y')
				{
					echo "\n\nThen I shall call you Mrs. ".$lname;	
				}
				else
				{
					echo "\n\nThen I shall call you Ms. ".$fname." ".$lname;
				}
			}
			else
			{
				echo "\n\nThen I shall call you ".$fname." ".$lname;
			}
			break;
		default:
			echo "\n\n!!!Please enter given valid data!!!";
	}
?>