<?php
//exercise 3
//Declare the variable
$variable = 8;

//print output 
print "Value is now ". $variable;
$variable += 2;
print "<br>Add 2. Value is now ". $variable;
$variable -= 4;
print "<br>Subtract 4. Value is now ".$variable;
$variable *= 5;
print "<br>Multiply by 5. Value is now ".$variable;
$variable /= 3;
print "<br>Divide by 3. Value is now ".$variable;
$variable = ++$variable; 
print "<br>Increment value by one. Value is now".$variable;
$variable = --$variable;  
print "<br>Decrement value by one. Value is now ".$variable;

?>