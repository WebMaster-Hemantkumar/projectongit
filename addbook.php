
<h2>Add Book</h2>
<form action="addbook.php" method="post">
Enter Title : <input type=text name="title"  value='<?php echo $_POST["title"]?>'>
Enter Authors : <input type=text name="authors" value='<?php echo $_POST["authors"]?>'>

<input type=submit value="Add Book">
</form>


<p/>
<a href="listbooks.php">List All Books</a>
<p/>
<?php

if ( ! isset($_POST["title"]))
   return;
   
include_once('db_login.php');

mysql_connect($db_host, $db_username,$db_password)
   or    die("Could not connect to database. Error --> " . mysql_error());

mysql_select_db($db_database);

$result = mysql_query ("select max(bid) + 1 from books");

if ( ! $result)
    die ("Could not execute query successfully");
    
$row = mysql_fetch_array($result);

$bid = $row[0];

echo "New Books Id : $bid<p/>";

mysql_free_result($result);

$title = $_POST["title"];
$authors = $_POST["authors"];

mysql_query("insert into books values($bid, '$title','$authors',1)");

if  ( mysql_affected_rows() > 0)
  echo "New book has been added successfully with book id : $bid";
else
  echo "Sorry! Books could not be added!";
?>

