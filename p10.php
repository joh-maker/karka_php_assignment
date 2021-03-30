<?php
$name=readline("Hey, what's your name? (sorry I keep forgetting.):\n");
echo "ok ",$name;
$old=readline(", How old are you?\n");
if($old<16){
echo "you can't drive";
}
else if($old<=17)
{
echo "you can't drive but not vote ",$name;
}
else if($old<=24)
{
echo "You can vote but not rent a car ", $name;
}
else{
echo "You can do pretty much anything ",$name;
}



?>