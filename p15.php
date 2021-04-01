<?php
 echo "TWO MORE QUESTIONS!,BABY\n";
echo "Think of something and I'll try to guess it!\n";
$in="inside";
$out="outside";
$bo="both";
$ye="yes";
$no="no";
$ques1=readline("Q1].Does it $in or $out or $bo:\n");
if($ques1===$in){
$ques2=readline("Q2].Is It living thing\n");
if($ques2===$no){
echo "my guess is shower curtain\n";
}
else{
echo "my guess is house plant";
}
}
if($ques1===$out){
$ques2=readline("Q2].Is It living thing\n");
if($ques2===$no){
echo "my guess is bill board\n";
}
else{
echo "my guess is bison";
}
}
if($ques1===$bo){
$ques2=readline("Q2].Is It living thing\n");
if($ques2===$no){
echo "my guess is cellphone\n";
}
else{
echo "my guess is dog";
}
}




?>