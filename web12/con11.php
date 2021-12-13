<?php
$hindi=$_REQUEST['hindi'];
$eng=$_REQUEST['eng'];
$math=$_REQUEST['math'];
$scince=$_REQUEST['scince'];
$com=$_REQUEST['com'];
$per=$hindi+$eng+$math+$scince+$com;
$per2=($per)/5;

printf("your all subject mark percenteage  :%.2f ",$per2);
?>