<?php
$height=readline("your height in metre:\n");
$weight=readline("your weight in kg:\n");
$bmi=$height*$height;
$emi=$bmi/$weight;
echo "your bmi is....",$emi;
echo "\n";
if($emi<18.5){
echo "under weight";
}
else if($emi>=18.5){
echo "normal weight";
}
else if($emi<24.9){
echo "normal weight";
}
else if($emi<=29.9){
echo "over weight";
}
else{
echo "obese";
}
?>