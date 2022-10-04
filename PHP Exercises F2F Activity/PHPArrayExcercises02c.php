<?php
  
/*
Write a PHP script to separate odd and even integers in separate arrays. 
Test Data :
Input the number of elements to be stored in the array :5
Input 5 elements in the array :
element - 0 : 25
element - 1 : 47
element - 2 : 42
element - 3 : 56
element - 4 : 32
Expected Output :
The Even elements are :
42 56 32
The Odd elements are :
25 47

*/ 

$input = array(25, 47, 42, 56, 32);
  
// odd elements
function oddElement($input)
{
    return ($input & 1);
}
  
//even elements
function evenElement($input)
{
    return !($input & 1);
}
  
// filter
$odd = array_filter($input, "oddElement");
$even = array_filter($input, "evenElement");
  
// re-index
$odd = array_values(array_filter($odd));
$even = array_values(array_filter($even));
  
// print
print"\nThe Even elements are:\n";
print_r($even);
print"\nThe Odd elements are:\n";
print_r($odd);

  
?>