<?php

// Declare an array
// $arr = [1, 2, 3, 4, 5, 6, 7];

// $sum = array_reduce($arr, fn($carry, $item) => $carry + $item);

// echo $sum;
// $str = "Hello World";
// $my_function = fn($a) => $str . $a;
// echo $my_function("!!");
function factorial($number)
{
    $fact = 1;
    for ($num = 1; $num <= $number; $num++) {
        $fact *= $num;
    }
    return $fact;
}

echo factorial(5) . "<br>";

$numbers = array(1, 2, 3, 4, 5, 6);

$result = array_map(function ($num) {return ($num * 2);}, $numbers);
print_r($result);

// $Var = function($value) //Anonymous function is used to assign value to variable $Var
// {
// //Anonymous function definition
// printf("The assigned value is: %s\r\n", $value);
// };
// //Calling the anonymous function using the assigning variable $Var with a string value input
// $Var('A string value is assigned');
// //Calling the anonymous function using the assigning variable $Var with a integer value input
// $Var(35);
echo "<br>";
function addition($num)
{

    return $num + 2;
}
function subtraction($num)
{
    return $num - 2;
}

function product($add_value, $sub_value, $value)
{
    $prod = $add_value($value) * $sub_value($value);
    echo $prod . "<br>";
}

product("addition", "subtraction", 10);
