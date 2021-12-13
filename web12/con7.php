<?php 
$radius=$_REQUEST['radius'];
$res=(2*3.14*$radius*$radius);
$res2=(2*3.14*$radius);
printf("the circumfrence of circle =%d",$res);
echo "\n";
printf("<br/>the area of circle =%d",$res2);
?>