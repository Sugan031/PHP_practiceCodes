<?php
try {
    $numerator = 100;
    $denominator = 0;

    if ($denominator === 0) {
        throw new Exception("Division by zero is not possible");
    }

    $result = $numerator / $denominator;
    echo "Result: $result";
} catch (Exception $e1) {
    echo "An error occurred: " . $e1->getMessage();
}

$numerator = 100;
$denominator = 0;
if ($denominator === 0) {
    die("Number is 0 so it is not divisible");
} else {
    echo $numerator / $denominator;
}
