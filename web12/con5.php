<?php
$amount=$_REQUEST['amount'];
$rate=$_REQUEST['rate'];
$time=$_REQUEST['time'];
$SI=($amount*$rate*$time)/100;
printf("your simple intrest =%d",$SI);


?>