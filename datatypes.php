<?php

 $name = "Srikanth";
 $expyears = 15;
 

 echo  " $name  is ".gettype($name). "<p>";
 echo  " $expyears  is ". gettype($expyears) . "<p>";
 
 if ( is_int($name))
      echo "$name is an integer";

 if ( is_int($expyears))
      echo "$expyears is an integer <p>";
      
 var_dump($name);
 var_dump($expyears);

?>      
 
 