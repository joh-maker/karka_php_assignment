<?php
$gender=readline("what is your gender(m or f):\n");
$first=readline("firstname:\n");
$last=readline("lastname:\n");
$age=readline("age=\n");
$mar=readline("are you married $first(yes or no)\n");
if($gender=="m"){
echo "then i shall call you MR.$last/n";
}
else if($mar=="no"){
echo "then i shall call you MISS.$last\n";
}
else{
echo "then i shall call you MRS.$last\n";
}

?>