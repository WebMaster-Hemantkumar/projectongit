



<?php
include('db_login.php'); 

$connection = mysql_connect($db_host, $db_username, $db_password);
if (!$connection)
  echo ("Could not connect to the database: <br />". mysql_error());
  else 
     echo "Connected Successfully";
?> 