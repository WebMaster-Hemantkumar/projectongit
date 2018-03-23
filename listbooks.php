<?php

include_once('db_login.php');

mysql_connect($db_host, $db_username,$db_password)
   or    die("Could not connect to database. Error --> " . mysql_error());

mysql_select_db($db_database);

$result = mysql_query ("select title, authors from books");

if ( ! $result)
    die ("Could not execute query successfully");
?>
<h2>Titles </h2>

<h4>No. of Titles : <?php echo mysql_num_rows($result)?></h4>
<table border=1 cellpadding="5">
<tr><th>Title <th>Authos </tr>

<?php
while ($row = mysql_fetch_array($result)) {
   printf("<tr><td>%s<td>%s</tr>",  $row["title"], $row["authors"]);  
}

mysql_free_result($result);

?>
</table>