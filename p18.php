<?php
$pin=12345;
$tries=0;
echo "welcome to the bank of michel\n";
$a=readline("enter your pin:\n");
while($a!=$pin){
echo "incorrect pin\n";
$a=readline("enter your pin\n");
$tries++;
}
if($a==$pin){
echo "pin accepted";
}





?>