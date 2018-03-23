<h2>String Functions </h2>
<?php

$st = "Apache PHP MySQL ";
$nst = "Apache PHP Oracle";

echo  "strlen('$st') =  ". strlen($st). "<br/>";
echo  "strstr('$st','PHP') =  ". strstr($st,"PHP"). "<br/>";
echo  "strpos('$st','PHP') =  ". strpos($st,"PHP"). "<br/>";
echo  "strcmp('$st','$nst') =  ". strcmp($st,$nst). "<br/>";
echo  "substr('$st',7,3) =  ".  substr($st,7,3). "<br/>";
?>

<h2>Date Functions </h2>

<?php
$now = getdate();

print_r($now);
echo  "getdate() =   ". $now["year"] . "<br/>";
echo  "date('d/m/y') = ". date("d/m/y H:i:s") . "<br/>";
echo  "mktime(11,10,10,8,3,2007) = ". mktime(11,10,10,8,3,2007) . "<br/>";
echo  "checkdate(29,2,2007)="  . (checkdate(29,2,2007) ? "Valid" : "Invalid") . "<br/>";

?>