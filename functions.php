<?php

function  printvalue() {
	echo "Simple Print Function";
}

function printmessage ($msg) {
	 echo "Print Message : $msg";
}

function  returnmessage() {
	 return " Be Nice!";
}


printvalue();
echo "<p>";
printmessage("Simple Message");
echo "<p>";
echo  returnmessage();

?>