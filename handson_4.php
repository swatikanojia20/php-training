<?php 
/*
* Author : Varun
* Date   : 07-Nov-2014
* Title  : PHP Hands-on - 4
* Desc   : DiveIn (Operators, Named array, Switch)
*/

/*
* Write a PHP code to create a Calculator.
* Calculator should perform basic operations like : +, -, *, /, **
* User is allowed to enter 3 inputs. 2 Operands and 1 Operator. e.g 4 + 6
* Store all 3 input in a named array. e.g. $calc = Array('operand1'=>4, 'operand2'=>6, 'operator'=>'+');
* Now use switch control to pass operand as a key and do calculations accordingly. 
*/

//Declare a calc array and hardcode the operators and operand in it as key value pair.


//Write echo statement to print operators and operand to user.
echo "Welcome to my Calculator, Result for $calc['operand1'] $calc['operator'] $calc['operand2'] is : ";

$calc = Array('operand1'=>4, 'operand2'=>6, 'operator'=>'+');


//Write switch statement to accept operator as a key, and write logic for calculation
$key = $calc['operator'];

Switch($key)
{
  case '+':
	echo "$calc[operand1] + $calc[operand2]";
		break;
      case '-':
  	echo "$calc[operand1] - $calc[operand2]";
		break;
     case '*':
    echo "$calc[operand1] * $calc[operand2]";
		break;
     case '/':
    echo "$calc[operand1] / $calc[operand2]";
		break;
     case '%':
    echo "$calc[operand1] % $calc[operand2]";
		break;
}

echo $calc['operand1']['operator']['operand2'];





  
?>
