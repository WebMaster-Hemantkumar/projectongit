<?php
// simple array
$a1 = array(10,20,30);

print_r($a1);

// array whhich is automatically built
$a2[0] = "Zero";
$a2[] = "One";
$a2[] = "Two";

echo '<p>';
print_r ($a2);

// Associate array
$a3["name"] = "Srikanth";
$a3["email"] = "srikanthpragada@yahoo.com";

echo '<p>';
print_r($a3);


$a4 = array( "name" => "Srikanth","email" => "srikanthpragada@yahoo.com");

echo '<p>';
print_r ($a4);

$pos = array_search("20",$a1);
if ( $pos !== false )
    echo "<p>20 Found at $pos";
    
$pos = array_search("100",$a1);
if ( $pos === false  )
    echo "<p>100 Not Found";    


    
// display array

for ( $count  =0 ; $count < count($a1) ; $count ++)
     echo  "<br>Value at $count = $a1[$count]";
     
     
foreach ( $a4 as $value)
     echo  "<br>$value";     
     
     
foreach ( $a4 as $key => $value)
     echo  "<br>$key  = $value";          
     
sort($a2);

foreach( $a2 as $value) 
   echo  "<br>$value";
     
     
?>