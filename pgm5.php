<?php
	echo "Hello.   ";
	$name=readline('What is your name? ');
	echo "\n";
	echo "Hi,"." ".$name."!";
	$age=(int)readline('  How old are you? ');
	echo "\n";
	echo "\n";
	$add_5=$age+5;
	echo "Did you know that in five years you will be"." ".$add_5." "."years old?\n";
	$sub_5=$age-5;
	echo "And five years ago you were ".$sub_5."!"." Imagine that!";
?>