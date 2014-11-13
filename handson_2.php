<?php 
/*
* Author : Varun
* Date   : 07-Nov-2014
* Title  : PHP Hands-on - 2
* Desc   : DiveIn (Constant, Control Structures)
*/
/*
* Write a PHP code to create a quiz. Store Answer in a Constant and using if-elseif-else controls display
* appropriate message to the users.
* You can save users input in a variable and hardcode the answer in it. 
* Basic Skeleton has already been created, just push your code at right place. 
* Quiz Question : Who is the winner of ICC WORLD CUP 2011?
* Options : Pakistan, Sri Lanka, India, England 
*/
//Define a constant below
define(ANSWER, India)
//Declare an answer variable and hardcode the correct answer in it.
$answer = "India";
//Write echo statement to print question to user.
echo "Who is the winner of ICC WORLD CUP 2011?";
echo "<br>";
//Write echo statement to print all options
echo "Pakistan";
echo "<br>";
echo "SriLanka";
echo "<br>"
echo "India";
echo "<br>"
echo "England";
echo "<br>"
//Write logic to find whether given answer is correct or not using if else.
if ($answer=="Pakistan") {
	echo "This answer is incorrect";
}
elseif ($answer=="SriLanka") {
	echo "This answer is incorrect";
}
elseif ($answer=="India") {
	echo "This answer is correct";
}
elseif ($answer=="England") {
	echo "This answer is incorrect";
}
else{

echo "Above are all wrong";

}
}
  
