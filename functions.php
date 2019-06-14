<?php 

function funcGeek() 
{ 
	echo "Hi Arjun"; 
} 

funcGeek(); 


function age($name, $age=12) 
{ 
	echo "$name is $age years old \n"; 
} 

age("Arjun", 21); 
age("Sameer"); 

function sum($num1, $num2, $num3) 
{ 
	$toatal = $num1 + $num2 + $num3; 
	
	return $total;
} 

$returnValue = sum(10, 2, 5); 
echo "The Total is $returnValue"; 


function addFun($num) { 
	$num += 2; 
	return $num; 
} 

function addFunction(&$num) { 
	$num += 10; 
	return $num; 
} 

$val = 5; 

valGeek($val); 
echo "The original value is still $n \n"; 

refGeek($val); 
echo "The original value changes to $n"; 




?> 
