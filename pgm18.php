<?php
	echo "WELCOME TO THE BANK OF MITCHEL.\n";
	$pin=(int)readline('ENTER YOUR PIN:');
	$tries=1;
	while($pin != 12345)
	{
		echo "\n\nINCORRECT PIN TRY AGAIN.\n";
		$pin=(int)readline('ENTER YOUR PIN:');
		$tries=$tries+1;
		if($tries==3)
		{
			echo "\nYOU HAVE RUN OUT OF TRIES.ACCOUNT LOCKED\n";
			break;	
		}
		
	}
	if($pin == 12345)
	{
		echo "\nPIN ACCEPTED. YOU NOW HAVE ACCESS TO YOUR ACCOUNT";
	}	
?>