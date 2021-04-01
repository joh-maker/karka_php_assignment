<?php
echo "Welcome to the bank of Michel\n";
$pin="12345";
$entry=readline("enter your pin:\n");
if($entry!=$pin){
echo "INCORRECT PIN";
}
else if($entry==$pin){
echo "PIN ACCEPTED. NOW YOU CAN ACCESS YOUR BANK ACCOUNT";
}




?>