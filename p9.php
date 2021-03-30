<?php
$weak=readline("enter the weak day:\n");
switch($weak)
{
case 1:
echo "sunday";
break;
case 2:
echo "monday";
break;
case 3:
echo "tuesday";
break;
case 4:
echo "wednesday";
break;
case 5:
echo "thurseday";
break;
case 6:
echo "friday";
break;
case 7:
echo "saturday";
break;
default:
echo "error";
}
echo "this is a" . date("l");


?>