<?php

$name = 'Caleb';
$string_one = 'Hello $name!';
// single quotes will treat everything as a string
echo $string_one;
// use double quotes to interpolate variables
$string_one = "Hello $name!\n";
echo $string_one;

// escape sequences...
// here the $ is treated as an actual $ sign
$string_one = "Hello \$name!\n";
echo $string_one;

// below will throw an error because the inner double quotes must be escaped
// $string_two = "Learning to display "Hello $name!" to the screen.";

// single quotes will treat entire enclosure as a string.
$string_two = 'Learning to display "Hello $name!" to the screen.';
echo $string_two;

$string_two = "Learning to display \"Hello $name!\" to the screen.\n";
echo $string_two;


?>
