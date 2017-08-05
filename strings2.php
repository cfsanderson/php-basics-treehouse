<?php
$name = 'Caleb Frost Sanderson';
$string_one = "";
// echo $string_one;

$string_two = 'Learning to display "Hello ' . $name . '!" to the screen.' . "\n";
echo $string_two;

$string_three = 'Learning to display '
  .'"Hello '
  . $name
  . '!" to the screen.'
  . "\n";
echo $string_three;

$string_four = 'Learning to display ';
$string_four .= '"Hello ';
$string_four .= $name;
$string_four .= '!" to the screen.';
$string_four .= "\n";
echo $string_four;

$string_five = 'Learning to display ';
$string_five .= '"Hello ';
$string_five .= $name;
$string_five .= '!" to the screen.';
$string_five .= "\n";
// prepend to a string
$string_five = 'I am ' . $string_five;
echo $string_five;

$firstName = 'Rasmus';
$lastName = 'Lerdorf';
$fullName = $firstName .' '. $lastName;

echo $fullName ."\n";

$isReady = true;
var_dump($isReady);
$isReady = false;
var_dump($isReady);

var_dump(1 + "2");

$a = 10;
$b = '10';

var_dump($a == $b);
var_dump($a === $b);
var_dump($fullName == 'Rasmus Lerdorf');

if ($string_one == 'Learning to display "Hello Caleb Frost Sanderson!" to the screen.' . "\n") {
  echo "the values match";
} elseif ($string_one == "") {
  echo '$string_one is empty';
} else {
  echo "they DO NOT match";
};

/*
Comparison Operators

$a == $b [Equal] TRUE if $a is equal to $b after type juggling.
$a === $b [Identical] TRUE if $a is equal to $b, and they are of the same type.
$a != $b [Not equal] TRUE if $a is not equal to $b after type juggling.
$a <> $b [Not equal] TRUE if $a is not equal to $b after type juggling.
$a !== $b [Not identical] TRUE if $a is not equal to $b, or they are not of the same type.
$a < $b [Less than] TRUE if $a is strictly less than $b.
$a > $b [Greater than] TRUE if $a is strictly greater than $b.
$a <= $b [Less than or equal to] TRUE if $a is less than or equal to $b.
$a >= $b [Greater than or equal] to TRUE if $a is greater than or equal to $b.
$a <=> $b [Spaceship] An integer less than, equal to, or greater than zero when $a is respectively less than, equal to, or greater than $b. Available as of PHP 7.
*/

?>
