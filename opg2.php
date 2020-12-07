<?php

$name = "Morten Juul";
$birthYear = 1976;
$number = 0.5;
$isTrue = false;
// define a constant
define("PI", 3.14);

echo "Name: " . $name . ". Datatype: " . gettype($name);
// linebrake needs to use the nlbr() function
echo nl2br("\n Born: " . $birthYear . ". Datatype: " . gettype($birthYear));
echo nl2br("\n Number: " . $number . ". Datatype: " . gettype($number));
echo nl2br("\n isTrue: " . $isTrue . ". Datatype: " . gettype($isTrue));
echo nl2br("\n pi: " . PI . ". Datatype: " . gettype(PI));
