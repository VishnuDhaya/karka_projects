<?php
	echo "WELCOME TO THE BANK OF MITCHEL.\n";
	$pin=(int)readline('ENTER YOUR PIN:');
	while($pin != 12345)
	{
		echo "\n\nINCORRECT PIN TRY AGAIN.\n";
		$pin=(int)readline('ENTER YOUR PIN:');
	}
	echo "\n\nPIN ACCEPTED.YOU NOW HAVE ACCESS TO YOUR ACCOUNT";
?>