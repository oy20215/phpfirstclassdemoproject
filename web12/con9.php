<?php
 $a=$_REQUEST['name1'];
  $b=$_REQUEST['name2'];
  $rem=($a/$b-(int)($a/$b)*$b);
  printf("the rem is :%f",$rem);
?>