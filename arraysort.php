<?php
$numbers = array(45, 98, 222, 1, 69, 118);
// sort($numbers);//sort in ascending order

rsort($numbers); //sort in descending order
unset($numbers[2]); //used to remove a element
print_r($numbers);

$age = array("Raj" => 24, "Kumar" => 31, "Prakash" => 18);
// asort($age); sort in ascending based on values
// ksort($age); sort in ascending based on keys
// arsort($age); sort in descending order based on values
krsort($age); //sort in descending order based on keys
print_r($age);
