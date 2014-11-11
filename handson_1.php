<?php 
/*
* Author : Varun
* Date   : 30-May-2014
* Title  : PHP Hands-on - 1
* Desc   : Basics (Variable, if, for)
*/

/*Write a PHP code to print Mathematical Table for given number '$tablefor'.
  Also validate the value of $tablefor, it should be always greater than 0.
  If its '0' then show proper error message and dont print the table. 
  Variables and basic skeleton is already created for you.
*/

//$tablefor is input for generating table for its value.
$tablefor = 2;

for($index=1; $index<=10; $index++){

	if($tablefor > 0){

echo "<br>";
echo $index*2;
echo "<br>";
	}

}

for($index=1; $index<=10; $index++){

	if($tablefor == 0){

break;

	}

}
echo"error";
?>
