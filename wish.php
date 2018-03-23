<?php

 // read input from HTML form
 $name = $_GET["uname"];
  
 $now = getdate();
 $hours = $now["hours"];
 echo  "Hours = $hours<p>";
 $greeting;
 
 if ( strlen($name) > 0) {
    if ( $hours < 12 )
       $greeting = "Morning";
    else 
       if ( $hours >=12 && $hours <= 16) 
            $greeting = "Afternoon";
       else 
            $greeting = "Evening";
    echo ("Good " . $greeting . "  " . $name .  "<p/>");          
    echo ("Welcome To PHP");
 }
 else 
    echo("Please enter your name!");
    
 
?>