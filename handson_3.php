<?php 
/*
* Author : Varun
* Date   : 07-Nov-2014
* Title  : PHP Hands-on - 3
* Desc   : DiveIn (Constant, Control Structures, Array)
*/
/*
* Write a PHP code to create a quiz. Implement Double-Dip logic
* Double-Dip Means : User can choose two answers. He will win if any of the 2 answer is correct.
* Store Answer in a Constant and using if-elseif-else controls display
* appropriate message to the users.
* You can save users input in an Array and hardcode the user answers in it. 
* Basic Skeleton has already been created, just push your code at right place. 
* Quiz Question : Who is the winner of ICC WORLD CUP 2012?
* Options : Pakistan, Sri Lanka, India, England 
*/
//Define a constant below
//Declare an answer array and hardcode the correct answer in it.

$answer = array('A1' =>'Pakistan' , 'A2' => 'India' );
$answer1= array('ans2'=>'India');
	$answer2 = array('ans2'=>$answer);
	echo $answer2['ans2']['A2'];


//Write echo statement to print question to user.
	echo "Who is the winner of ICC WORLD CUP 2012?";
//Write echo statement to print all options
//Write logic to find whether given answer is correct or not using if else.
  
?>
