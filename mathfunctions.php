<?php
//The abs() function returns the absolute (positive) value of a number.
//abs(number);
echo (abs(6.7) . "<br>");
echo (abs(-6.7) . "<br>");
echo (abs(3) . "<br>");
echo (abs(-3) . "<br>");

//The floor() function rounds a number DOWN to the nearest integer, if necessary, and returns the result.
//floor(number);
echo (floor(0.60) . "<br>");
echo (floor(0.40) . "<br>");
echo (floor(5) . "<br>");
echo (floor(5.1) . "<br>");
echo (floor(-5.1) . "<br>");
echo (floor(-5.9) . "<br>");

//The ceil() function rounds a number UP to the nearest integer, if necessary.
//ceil(number);
echo (ceil(0.60) . "<br>");
echo (ceil(0.40) . "<br>");
echo (ceil(5) . "<br>");
echo (ceil(5.1) . "<br>");
echo (ceil(-5.1) . "<br>");
echo (ceil(-5.9) . "<br>");

//The round() function rounds a floating-point number.
//round(number,precision,mode);
// mode    Optional. Specifies a constant to specify the rounding mode:
//     PHP_ROUND_HALF_UP - Default. Rounds number up to precision decimal, when it is half way there. Rounds 1.5 to 2 and -1.5 to -2
//     PHP_ROUND_HALF_DOWN - Round number down to precision decimal places, when it is half way there. Rounds 1.5 to 1 and -1.5 to -1
//     PHP_ROUND_HALF_EVEN - Round number to precision decimal places towards the next even value
//     PHP_ROUND_HALF_ODD - Round number to precision decimal places towards the next odd value

echo (round(0.60) . "<br>");
echo (round(0.50) . "<br>");
echo (round(0.49) . "<br>");
echo (round(-4.40) . "<br>");
echo (round(-4.60) . "<br>");

echo (round(4.96754, 2) . "<br>");
echo (round(7.045, 2) . "<br>");
echo (round(7.055, 1) . "<br>");

echo (round(1.5, 0, PHP_ROUND_HALF_UP) . "<br>");
echo (round(-1.5, 0, PHP_ROUND_HALF_UP) . "<br>");

echo (round(1.5, 0, PHP_ROUND_HALF_DOWN) . "<br>");
echo (round(-1.5, 0, PHP_ROUND_HALF_DOWN) . "<br>");

echo (round(1.5, 0, PHP_ROUND_HALF_EVEN) . "<br>");
echo (round(-1.5, 0, PHP_ROUND_HALF_EVEN) . "<br>");

echo (round(1.5, 0, PHP_ROUND_HALF_ODD) . "<br>");
echo (round(-1.5, 0, PHP_ROUND_HALF_ODD) . "<br>");

//The max() function returns the highest value in an array, or the highest value of several specified values.
echo (max(2, 4, 6, 8, 10) . "<br>");
echo (max(22, 14, 68, 18, 15) . "<br>");
echo (max(array(4, 6, 8, 10)) . "<br>");
// echo (max(array(44, 16, 81, 12) . "<br>"))

//The min() function returns the lowest value in an array, or the lowest value of several specified values.



?>
