<?php 
$name1=$_REQUEST['name1'];
$name2=$_REQUEST['name2'];
$res=$name1+$name2;
printf("the two value sum result is =%d<br/>",$res);
$mul=$name1*$name2;
printf("the two value multi result is =%d<br/>",$mul);
$div=$name1/$name2;
printf("the two value div result is =%d<br/>",$div);
$sub=$name1-$name2;
printf("the two value sub result is =%d",$sub)

?>