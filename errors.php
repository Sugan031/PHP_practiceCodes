<?php

// function a($txt) {
//     b("Glenn");
// }
// function b($txt) {
//     c("Cleveland");
// }
// function c($txt) {
//     var_dump(debug_backtrace());
// }
// a("Peter");

// echo "<br><br>";
// function e($txt) {
//     f("Glenn");
// }
// function f($txt) {
//     g("Cleveland");
// }
// function g($txt) {
//     debug_print_backtrace();
// }
// e("Peter");
// echo "<br><br>";
// echo "KING";
// echo $test;
// print_r(error_get_last());
// echo "KING";

// echo "<br><br>";
// echo "<br><br>";

// // Set error reporting to display all types of errors
// error_reporting(E_ALL);

// // Enable displaying errors on the screen
// ini_set('display_errors', 1);

// // Enable logging errors to a file
// ini_set('log_errors', 1);
// ini_set('error_log', 'path/to/error.log');

// // Example: Division by zero to trigger a warning
// // $number = 10 / 0;

// // Example: Access an undefined variable to trigger a notice
// echo $undefinedVariable;

// // Example: Explicitly trigger a custom error
// // trigger_error("This is a custom error", E_USER_ERROR);

// // Example: Using try-catch to catch exceptions
// try {
//     // Code that might throw an exception
//     throw new Exception("This is an exception");
// } catch (Exception $e) {
//     // Handle the exception
//     echo "Caught exception: " . $e->getMessage();
// }

function checkAge($number)
{
    if ($number < 18) {
        throw new Exception("You are not eligible candidate to vote");
    }
    return true;
}
function my_error($error_number, $error_string, $filename, $line_number)
{
    echo $error_number . "<br>";
    echo $error_string . "<br>";
    echo $filename . "<br>";
    echo $line_number . "<br>";

    echo $error_number . " : " . $error_string . " in " . $filename . " and " . $line_number;
}

set_error_handler("my_error");

try {

    checkAge(17);
    echo "<b>Message : You are eligible candidate to vote<b>";
} catch (Exception $e1) {
    echo "<b>Message : {$e1->getMessage()}<b>";
}

trigger_error("This is a my error", E_USER_ERROR);

// function myErrorHandler($errno, $errstr, $errfile, $errline) {
//     echo "<b>Custom error:</b> [$errno] $errstr<br>";
//     echo " Error on line $errline in $errfile<br>";
// }

// // Set user-defined error handler function
// set_error_handler("myErrorHandler");

// $test=2;

// // Trigger error
// if ($test>1) {
//     trigger_error("A custom error has been triggered");
// }
