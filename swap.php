

<?php

 function  swap(&$p1, &$p2) {
 	
 	  $temp = $p1;
 	  $p1= $p2;
 	  $p2 = $temp;
 }
 
 $v1 = 10;
 $v2 = 20;
 
 echo $v1 . " " . $v2 . "  ";
 
 swap($v1,$v2);
 
 echo $v1 . " " . $v2 . "  ";
 
 ?>
 