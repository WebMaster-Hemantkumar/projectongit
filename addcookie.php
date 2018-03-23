<?php

// add cookie

$name = $_GET["cname"];
$value = $_GET["cvalue"];
$dur = $_GET["durable"];


if ( $dur != null)
     setcookie($name,$value, time() + 3600);
else 
     setcookie($name,$value);
     

?>

<a href="listcookies.php">List Cookies</a>

