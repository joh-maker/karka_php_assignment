<?php
$earth=readline("please enter your current earth weight:\n");
echo "I have information for the information planets\n";
echo "   1.venus   2.Mars   3.Jupiter\n";
echo "   4.Saturn  5.Uranus 6.Neptune\n";
$planet=readline("which planet are you visiting?\n");
if($planet==1){
$venus=$earth*0.78;
echo "your weight would be ",$venus;
echo " pounds on that planet";
}
else if($planet==2){
$mars=$earth*0.39;
echo "your weight would be ",$mars;
echo " pounds on that planet";
}
else if($planet==3){
$jupiter=$earth*2.65;
echo "your weight would be ",$jupiter;
echo " pounds on that planet";
}
else if($planet==4){
$saturn=$earth*1.17;
echo "your weight would be ",$saturn;
echo " pounds on that planet";
}
else if($planet==5){
$uranus=$earth*1.05;
echo "your weight would be ",$uranus;
echo " pounds on that planet";
}
else if($planet==6){
$neptune=$earth*1.23;
echo "your weight would be ",$neptune;
echo " pounds on that planet";
}
else{
echo "your number is invalid";
}



?>