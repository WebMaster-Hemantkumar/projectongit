



<?php
include('db_login.php'); 

$connection = new mysqli($db_host, $db_username, $db_password, $db_database);

if (!$connection)
  echo ("Could not connect to the database: <br />".  mysqli_connect_error());
else 
     echo "Connected Successfully";
?> 