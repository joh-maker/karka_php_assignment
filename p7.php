<?php
$height=readline("your height in metre:\n");
$weight=readline("your weight in kg:\n");
$bmi=$height*$height;
$emi=$bmi/$weight;
echo "your bmi is....",$emi;
?>