<?php
/**
* Write a PHP function to find if number is odd or even.
* Number should be present in an array.
* Pass array as parameter to that function.
* Function Name should be : isOddOrEven($number)
* For each element echo whether its odd or even.
* E.g. if array is [9, 2, 3, 8]
* 9 - Odd
* 2 - even
* 3 - Odd
* 8 - Even
*/

$numbers = array(9, 2, 3, 8);

function isOddOrEven($numbers) {

foreach ($numbers as $unitItem) {
	
	if ($unitItem%2 == 0) {
		
		echo $unitItem . " - Even" . "<br>";
		
	}
	else{

		echo $unitItem . " - Odd" . "<br>";

	}
}


}

isOddOrEven($numbers);

?>
