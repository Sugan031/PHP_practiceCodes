<?php
//to create a array array()

$cars = array("BMW", "Nissan", "Audi", "Toyoto");
$Avengers = ["Iron man", "Captain America", "Thor", "Hulk"];
foreach ($cars as $car) {
    echo $car . "<br>";
}

$age = array("Raj" => 24, "Bruce" => 45, "Peter" => 34);
foreach ($age as $key => $value) {
    echo "$key's age is $value<br>";
}

$lotteryNo = array("Raj" => 110, "Bruce" => 5, "Peter" => 343, "Govind" => array(99, 71, 69));
print_r($lotteryNo["Govind"]);
echo "<br>";
echo $lotteryNo["Raj"];
foreach ($lotteryNo as $key => $value) {
    echo $key;
    print_r($value);
}

//to change a key case array_change_key_case()

// print_r(array_change_key_case($age,$lotteryNo,CASE_UPPER));
print_r(array_change_key_case($age, CASE_UPPER)); //upper case
echo "<br>";
print_r(array_change_key_case($age, CASE_LOWER)); //lowercase
echo "<br>";

//to split the array into chunks array_chunks()
print_r(array_chunk($cars, 2, true));
echo "<br>";

//to return the value of single column array_column()
$employeeDetails = array(
    array(
        'id' => 5698,
        'first_name' => 'Peter',
        'last_name' => 'Griffin',
    ),
    array(
        'id' => 4767,
        'first_name' => 'Ben',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 3809,
        'first_name' => 'Joe',
        'last_name' => 'Doe',
    ),
);

$last_names = array_column($employeeDetails, 'last_name', 'id');
print_r($last_names);

echo "<br>";

//to comine two arrays one as keys and one as values array_combine()
$Batsman = array("Rohit", "Kohli", "Raina");
$runs = array(12, 87, 54);
print_r(array_combine($Batsman, $runs));
echo "<br>";

//to count the each values present arrat_count_values()
$fruits = array("apple", "banana", "orange", "banana", "Guava", "apple");
print_r(array_count_values($fruits));
echo "<br>";
$fruitCount = array_count_values($fruits);
print_r($fruitCount);

echo "<br>";
$sample1 = array("a" => 1, "b" => 2, "c" => 7, "d" => 4);
$sample2 = array("a" => 1, "k" => 2, "c" => 3, "d" => 4, "e" => 5);
$sample3 = array("a" => 1, "b" => 2, "c" => 7, "d" => 4);

print_r(array_diff($sample2, $sample1, $sample3));
echo "<br>";
print_r(array_diff_assoc($sample2, $sample1, $sample3));
echo "<br>";
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "h" => "green", "g" => "blue");

$result = array_diff_assoc($a1, $a2);
print_r($result);
echo "<br>";

$keys = array("a", "b", "c", "d");
$a1 = array_fill_keys($keys, "blue", "green", "red", "black");
print_r($a1);
