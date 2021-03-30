<?php
	echo "TWO MORE QUESTIONS, BABY!\n\n";
	echo "Think of something and I'll try to guess it!\n\n";
	$ques_1=readline('Question 1) Does it stay inside or outside or both (inside/outside/both)? ');
	switch($ques_1)
	{
		case 'inside':
			$ques_2=readline('Question 2) Is it a living thing(yes/no)? ');
			if($ques_2==='yes')
			{
				echo "\nThen what else could you be thinking of Houseplant?!";
			}
			else
			{
				echo "\nThen what else could you be thinking of Refregriator?!";
			}
			break;
		case 'outside':
			$ques_2=readline('Question 2) Is it a living thing(yes/no)? ');
			if($ques_2==='yes')
			{
				echo "\nThen what else could you be thinking of besides Python?!";
			}
			else
			{
				echo "\nThen what else could you be thinking of besides Mountain?!";
			}
			break;
		case 'both':
			$ques_2=readline('Question 2) Is it a living thing(yes/no)? ');
			if($ques_2==='yes')
			{
				echo "\nThen what else could you be thinking of Dog?!";
			}
			else
			{
				echo "\nThen what else could you be thinking of Mobilephone?!";
			}
			break;
		default:
			echo "!!!Please type given valid data!!!";		
	}
?>