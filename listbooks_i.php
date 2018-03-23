<?php

include_once('db_login.php');

$con  = new mysqli($db_host, $db_username,$db_password,$db_database)
   or    die("Could not connect to database. Error --> " . mysqli_connect_error());

$result = $con->query("select title, authors from books");

if (! $result)
    die ("Could not execute query successfully");
?>
<h2>Titles </h2>

<h4>No. of Titles : <?php echo $result->num_rows ?></h4>
<table border=1 cellpadding="5">
<tr><th>Title <th>Authos </tr>

<?php
while ($row = $result->fetch_object() )
   printf("<tr><td>%s<td>%s</tr>",  $row->title, $row->authors);  

$result->close();

?>
</table>