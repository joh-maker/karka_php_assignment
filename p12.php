<?php
$quiz=readline("Are you ready for the quiz:\n");
echo "$quiz";
if($quiz=='y'){
echo "okay, Here it comes\n";
}
echo "Q1].What is the capital of alaska:\n";
echo "1) Melborne";
echo "\n";
echo "2)Anchourage";
echo "\n";
echo "3) Juneau";
echo "\n";
$ans=readline("answer:\n");
if($ans==3){
echo "correct answer\n";
}
else{
echo "incorrect answer\n";
}
echo "Q2].Can you store the value cat in a variable of type int\n";
echo "\n";
echo "1) Yes";
echo "\n";
echo "2) no";
echo "\n";
$sub=readline("answer:\n");
if($sub==2)
{
echo "correct answer\n";
}
else{
echo "sorry, CAT is a string.ints can only store numbers";
}
echo "Q3].What is the result of 9=6/3?\n";
echo "\n";
echo "1) 5";
echo "\n";
echo "2) 11";
echo "\n";
echo "3) 15/3";
echo "\n";
$san=readline("answer:\n");
if($san==2)
{
echo "correct answer";
}
else{
echo "incorrect answer";
}



?>