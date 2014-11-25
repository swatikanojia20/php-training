<?php
/**
* Write a php function to print table for given parameter.
* Function Name should be : getTable($number)
* Use for loop for generating table dynamically.
*/

function getTable()
{
for ($x=1; $x < 11; $x++) { 
	
	echo "5 x " . $x . "=" . 5 * $x;
	echo "<br>";
}
}

getTable();

?>
