<?php
echo "WELCOME TO MICHEL'S TINY ADVENTURE\n";
$up="upstairs";
$kit="kitchen";
$ref="refrigirator";
$cab="cabinet";
$y="yes";
$n="no";
$ye="yes";
$no="no";
$a=readline("You are in a creepy house, would you like to go $up or into the $kit\n");
if($a===$kit)
{
$b=readline("there is a long countertop with dirty dishes everywhere, of to one side there is, as you'd expect, a $ref. you may open the $ref or look in the $cab.\n");
 if($b===$ref){
 $c=readline("inside the refrigirator you see food and stuff. would you like to eat some of a food?($y or $n)\n");
  if($c===$y){
echo "you die";
}
else if($c===$n){
echo "no die";
}
else{
echo "no one now";
}
}
}

?>