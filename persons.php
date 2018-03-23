<?php
mysql_connect("localhost", "root", "srikanth")
or die("Could not connect to MySQL server!");
@mysql_select_db("mysql")
or die("Could not select database!");

$result = mysql_query("select * from persons");

// Loop through each row, outputting the productid and name
for ($count=0; $count < mysql_numrows($result); $count++)
{
$name = mysql_result($result, $count, "name");
$email = mysql_result($result, $count, "email");
echo "$name : $email <p />";
}

//  display persons as  
$result = mysql_query("select * from persons");

while ($row = mysql_fetch_object($result))
{
$name = $row->name;
$productid = $row->email;
echo "$name : $email <br />";
}
mysql_close();
?>