<?php

/*
Write a PHP script to count a total number of duplicate elements in an array. 

Test Data :
Input the number of elements to be stored in the array :3
Input 3 elements in the array :
element - 0 : 5
element - 1 : 1
element - 2 : 1
Expected Output :
Total number of duplicate elements found in the array is : 1
*/

$userInput = [5,1,1];

$notDup = array_unique($userInput);                
$dup = count($userInput) - count($notDup);  // 6 - 4 = 2

print_r($userInput); 

if ($dup == 0) {
    echo "No duplicate elements";
}
echo "Total number of duplicate elements found in the array is: " . $dup;

?>