<?php
echo "----------traingle-------------\n";
$base = readline("enter the base : \n");
$height = readline("enter the height : \n");
$area = ($base*$height)/2;
echo "area of a traingle using herons formula : $area\n";
echo ("\n");

echo "--------square-----------------\n";
$a1 = readline("enter the number : \n");
$a2 = $a1*$a1;
echo "area of the square : $a2\n"; 
echo ("\n");

echo "------rectangle-----------------\n";
$width = readline("enter the width : \n");
$length = readline("enter the length : \n");
$area2 = $width*$length;
echo "area of the rectangle : $area2\n";
echo ("\n");

echo "-------circle-----------------\n";
echo ("\n");
$radius = readline("enter the radius : \n");
$circle = (22/7.0)*$radius*$radius;
echo "area of the circle : $circle\n";
echo ("\n");

echo "-------tripizoid-----------------\n";
echo ("\n");
$a = readline("enter the area :\n");
$b = readline("enter the base :\n");
$h = readline("enter the height :\n");
$tri = (($a+$b)/2)*$h;
echo "area of the tripizoid : $tri\n";
echo ("\n");

 



?>