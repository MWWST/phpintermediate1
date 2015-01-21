<?php

echo "<b>Part One</b><br/><br/>";

function draw_stars($array) {
	foreach ($array as $key => $value) { // go through the array we pass to the function
		for ($i=1; $i<=$value; $i++){  //start another loop so we loop through the value of each item in the array
			if ($i<$value) {   // if i is less than the value print just a star
			echo "*";
		}
			elseif ($i = $value) { // when i becomes equal to our value, print a star with a line break. Then we exit this inner loop and increment to the next value in the array and repeat.
				echo "* </br>";
			}
		}
	}
}
$x = array(4,6,1,3,5,7,25);
draw_stars($x);
echo "<br/><br /><b>Part Two</b><br/><br/>";
function draw_stars2($array) {  // declare the function
		foreach ($array as $key => $value) {  // loop through each value in the array 
			if (is_string($value)) {  // if it is a string
				for ($i=1; $i<=strlen($value); $i++){  // now loop through again starting at 1 and while i is less than or equaly to
													   // string length (because we need to get up to the length to insert the br)
					if ($i<strlen($value))			   // if i is less than the srting lenght of the value
					{
					echo strtolower(substr($value, 0,1));			// get the first character and print it, this will happen until i= the length of that string
					}
					elseif ($i = strlen($value)) 		// once i = the length of the string in the current index
					{
						echo strtolower(substr($value, 0,1)) . "<br>";  // print the first character with a <br> as this is the last time we need to print that character
						// echo $letter . "<br>";
					}
				}
			}
			else {										// else not a string
				for ($j=1;$j<=$value;$j++) {			// loop while j is less than or equal to the value in the current index from the foreach loop above
					if ($j<$value) {					// if j is less than the value, print a star to the screen. This will repeat until j != the value in the current index. 
						echo "*";
					}							
					elseif ($j = $value) { // when i becomes equal to our value, print a star with a line break. Then we exit this inner loop and increment to the next value in the array and repeat.
					echo "* </br>";
					}
				}
			}
		}
	}
$x = array(4,'Tom',1,'Michael',5,7,'Jimmy Smith');
draw_stars2($x);


?>