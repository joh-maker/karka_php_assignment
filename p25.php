<?php

$month = readline("enter month :\n");
echo $month;
$month= date("F",mktime(0,0,0,$month ,10));
echo "    $month\n";
?>