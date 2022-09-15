<?php

/**When you are writing scripts, you will often need to see exactly 
 * what is inside your variables. 
 * For this PHP exercise, think of the ways you can do that, 
 * then write a script that outputs the following, 
 * using the echo statement only for line breaks.

string(5) "Harry"
Harry
int(28)
NULL
**/

$name="Harry";
$age=28;

var_dump($name);
echo "<br>";

print_r($name);
echo "<br>";

var_dump($age);
echo "<br>";

$name=NULL;
var_dump($name); 

?>
