<?php

/**Loops are very useful in creating lists and tables. In this PHP exercise, 
you will use a loop to create a list of equations for squares.
Using a for loop, write a script that will send to the browser 
a list of squares for the numbers 1-12.
Use the format, "1 * 1 = 1", and be sure to include code 
to print each formula on a different line. **/ 
 
for ($x=1; $x<=12; $x++){
  $result = $x * $x;
  echo "$x * $x = $result \n";
}
 
?>