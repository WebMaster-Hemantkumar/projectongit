<?php

$a[] = 10;
$a[]= 20;
$a[]= 30;

echo  $a[2];

// using array function

$weeks= array("mon","tue","web","thu");

$books= array(1 => 'Learning PHP  & MySQL',
                 2 => 'Teach your self PHP, Apache and MySql');
                 
 echo $books[2];
 
 // displaying all elements of the array
 foreach( $books as $no => $name)
   echo "<p>". $no . '->' . $name ;
   
 sort($weeks);
 
 foreach($weeks  as $w)
    echo "<p>" . $w;
    
    
?>