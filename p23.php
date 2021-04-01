<?php
$i=$j;
for($j=1;$j<=100;$j++)
{
if($j%3==0){
echo "fizz\n";
}
else if($j%5==0){
echo "buzz\n";
}
else if($j%2==0){
echo "FizzBuzz\n";
}
else {
echo "$j\n";
}
}




?>