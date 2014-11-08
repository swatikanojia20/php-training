<?php 
	//start of page
	echo "Welcome to PHP";
	//declaring & initialization variable
	$firstName = "John";
	$number1 = 10;
	$number2 = 20;
	$number3 =5.10;
	$section = 'A';
	$marks = 88;
	$strength =100;
	//line break
	echo "<br/>";
	echo $firstName;
	$sum = $number1+$number2;
	echo "<br/>";
	echo "Sum of number1 and number2 : $sum &nbsp; OKAY DONE!";
	
	//CONDITIONAL
	if($section == 'A')
	{
		echo "<br/>";
		echo "Welcome to PHP again";
	}

	if($number1 >=  10)
	{
		echo "<br/>";
		echo "Welcome to PHP once again";
	}

    //logical opertors == >= <= !=
    // OR : ||
    //AND : &&
    //NOT : !

	if($section == 'A' && $marks > 60 )
		//true             //true
	{
		echo "<br/>";
		echo "Congrats!! You are in PHP (AND &&)";
	}
//AND
/*
1 1 = 1
1 0 = 0
0 1 = 0
0 0 = 0
*/
//OR
/*
1 1 = 1
1 0 = 1
0 1 = 1
0 0 = 0
*/
	if($section == 'A' || $marks > 90 )
		//true             //false
	{
		echo "<br/>";
		echo "Congrats!! You are in PHP (OR ||)";
	}

	//LOOPING CONSTRUCTS
	for($index=0; $index <100; $index++)
	{
		
		if($marks == $index)
		{
			continue;
		}
		echo "<br/>";
		echo "YOU ARE INSIDE FOR on Index : $index";
	}

	echo "<br/> OUTSIDE FOR AFTER continue RUN";

	for($index=0; $index <100; $index++)
	{
		
		if($marks == $index)
		{
			break;
		}
		echo "<br/>";
		echo "YOU ARE INSIDE FOR on Index : $index";
	}

	echo "<br/> OUTSIDE FOR AFTER break RUN";

	//ARRAY EXAMPLE
	echo "<br/ > ARRAY EXAMPLE BELOW <br />";
	$trainer = array('t1'=>'Varun' , 't2'=>'Vikky');
	$course1= array('trainer'=>'Varun' , 'trainee'=>'Swati');
	$course2 = array('trainer'=>$trainer, 'trainee'=>'Swati');
	echo $course2['trainer']['t1'];

	//Operators
	/*
	+=, -=, *=, /=, .=
	*/
	$score = 0;
	$score = 4;
	$score = $score + 2;
	$score += 2;

	$tName = "Swati";
	$tName .= "Sirname";
	$tName .= "newsmnthing";

	//Comparison Operator
	$val1 = 0;
	$val2 = '0';
	$val3 = "0";
	
	if($val1 == $val2)
	{
		echo "1. We are same.";
	}
	
	if($val1 == $val3)
	{
		echo "2. We are same.";
	}

	if($val3 == $val2)
	{
		echo "3. We are same.";
	}

	if($val1 === $val2)
	{
		echo "1. We are same.With triple";
	}
	
	if($val1 === $val3)
	{
		echo "2. We are same.With triple";
	}

	if($val3 === $val2)
	{
		echo "3. We are same.With triple";
	}
	echo "<br/>";
	//KBC Quiz:  Who is the legend of Indian cricket team?
	$answer = "Kapil";

	Switch($answer)
	{
		case "Kapil" : 
					echo "Galat Jawab";
					break;
		case "Sunil" : 
					echo "Galat Jawab";
					break;
		case "Sachin" : 
					echo "Sahi Jawab";
					break;
		case "Ganguly" : 
					echo "Galat Jawab";
					break;
		default : 
					echo "Galat Jawab";
					break;
	}


 ?>
