<?php

/**HTML tables involve a lot of repetitive coding - a perfect place to use for loops. 
 You can do even more if you nest the for loops
In this PHP exercise, use two for loops, one nested inside another. 
Create the following multiplication table
*/

	for ($row=1; $row <= 7; $row++) { 
		echo "\n";
		for ($col=1; $col <= 7; $col++) { 
		   $p = $col * $row;
		   echo $p . "\t";
		   	}
	  	    echo "";
		}
		echo "";
?>