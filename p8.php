<?php
$name=readline("hey, what's your name:\n");
echo "ok ",$name;
$age=readline(", how old are you?:\n");
if($age<16){
echo "you can't drive ",$name;
}
elseif($age<18){
echo "you can't vote ",$name;
}
elseif($age<25){
echo "you can't rent a car ",$name;
}
else{
echo "you can't do anything that's legal ",$name;
}



?>