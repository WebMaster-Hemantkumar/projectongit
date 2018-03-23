<html>

<body>

<h2>Sessions</h2>

<?php

session_start();
// get session variables 
echo "Session Id : ". session_id(). "<p>";

if (  $_GET["key"] != null ) {
     // create a session variable
	 $_SESSION[$_GET["key"]] = $_GET["value"];
	 echo "Session Variable Added <p>";
}

// get all session variables 
echo "<h3>Available Session Variables</h3>";
foreach($_SESSION  as $key => $value)
   echo "$key : $value <br/> ";

?>

<h3>Add Session Variable</h3>

<form action="sessions.php">
<table>
<tr>
<td>Enter Key :</td>
<td><input type=text name=key > </td>
</tr>
<tr>
<td>Enter value :  </td>
<td><input type=text name=value></td>
</tr>
</table>

<p/>
<input type=submit value="Add">
</form>
</body>
</html>