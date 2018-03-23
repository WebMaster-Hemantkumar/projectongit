
<html>
<body>
 <h2>Yard Calculation</h3>
 <form action="yards.php">
 <table>
  <tr>
  <td>
   Enter width in feet : 
   </td>
   <td>
   <input type=text name=width size=5 value='<?php  echo $_GET["width"] ?>'>
   </td>
   </tr>
  <tr>
  <td>
   Enter length in feet : 
   </td>
   <td>
   <input type=text name=length size=5 value='<?php echo $_GET["length"] ?>'> 
   </td>
   </tr>
   </table> 
   <p/>
   <input type=submit value="Get Yards">
 </form>
 
<?php

if (! isset( $_GET["width"]))
    exit();
    
$width = $_GET["width"] ;
$length = $_GET["length"] ;

$yards = $width * $length / 9;

echo "<h4> $width (feet) x $length  (feet) =  $yards (Yards) </h4>";


?>
</body>
</html>