<?php
echo "please enter the following information so i can sell it for a profit!\n";
$fname=readline("First name:\n");
$lname=readline("Last name:\n");
$grade=readline("Grade (9-12):\n");
$id=readline("student id:\n");
$log=readline("Login:\n");
$ok=readline("GPA(0.0-4.4):\n");
echo "your information:\n";
echo "   Login: $log\n";
echo "   Id: $id\n";
echo "   Name: $fname, $lname\n";
echo "   GPA: $ok\n";
echo "   grade: $grade\n";
?>