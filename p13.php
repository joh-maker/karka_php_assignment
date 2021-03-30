<?php
echo "TWO QUESTIONS!\n";
echo "Think of an object, and i will try to guess it.\n";
$ani="animal";
$veg="vegetable";
$min="mineral";
$yes="yes";
$no="no";
$ques1=readline("Q1].Is it $ani, $veg and $min:\n");
if($ques1===$ani){
$ques2=readline("Q2].Is it bigger than a breadbox\n");
if($ques2===$no){
echo "i guess that is a mouse";
}
else{
echo "that is squrill";
}
}
else if($ques1===$min){
$ques3=readline("Q2].Is it bigger than a breadbox\n");
if($ques3===$no){
echo "i guess that is a paperclip";
}
else {
echo "that is camero";
}
}
else if($ques1===$veg){
$ques4=readline("Q2].Is it bigger than a breadbox\n");
if($ques4===$no){
echo "i guess that is a watermelon";
}
else {
echo "that is carrot";
}
}







?>