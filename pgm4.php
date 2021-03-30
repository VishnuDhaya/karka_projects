<?php
	echo "Please enter the following information so I can sell it for a profit!\n";	
	$fname=readline('First name:');
	$lname=readline('Last name:');
	$grade=(int)readline('Grade(9-12):');
	$student_id=(int)readline('Student ID:');
	$login=readline('Login:');
	$gpa=(float)readline('GPA(0.0-4.0):');
	echo "\n";
	echo "Your information:\n";
	echo "        "."Login:"." ".$login."\n";
	echo "        "."ID:"."    ".$student_id."\n";
	echo "        "."Name:"."  ".$fname.",".$lname."\n";
	echo "        "."GPA:"."   ".$gpa."\n";
 	echo "        "."Grade:"." ".$grade."\n";
?>