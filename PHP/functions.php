<?php

function msg()
 {
   echo "simple function().<br>";
 }
 msg();
function mul($num1,$num2)
 { $m=$num1*$num2;
   echo "Multiplication: $m.<br>";
 }
 echo "passing values.<br>";
 mul(20,19);
function mod($num)
 {$r=$num%23;
   echo "module:$r.<br>";
 } 
 echo "pass by reference.<br>";
  $ref=43;
 echo "reference value $ref.<br>";
 mod($ref);

function calSalary($basic)
 {
  $salary=$basic+1250;
  return $salary;
 }
 echo "return function.<br>";
 $r=calSalary(23456);
 echo "$r.<br>";
function showDynamic()
 {
  echo "function called.<br>";
  }
 echo 'dynamic function.<br>';
 $fn="showDynamic";
 $fn();
 $otherfn='showDynamic';
 $otherfn();
 echo 'check with ref.<br>';
 $t='showDynamic';
 $m=$t;
 $m();
 echo 'with out ().<br>';
 $check="showDynamic()";
 $check;
 echo 'script not exit';
 $check="showDynamic()";//will not be called
 $check();
 echo'end of func';
?>
