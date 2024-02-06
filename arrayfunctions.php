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

print_r(array_merge($Batsman,$runs));

//to count the each values present arrat_count_values()
$fruits = array("apple", "banana", "orange", "banana", "Guava", "apple");
print_r(array_count_values($fruits));
echo "<br>";
$fruitCount = array_count_values($fruits);
print_r($fruitCount);

echo "<br>";
$sample1 = array("a" => 1, "b" => 2, "c" => 7, "d" => 4);
$sample2 = array("a" => 1, "k" => 2, "c" => 3, "d" => 4, "e" => 5);
$sample3 = array("a" => 5, "b" => 6, "c" => 3, "d" => 8);

echo "*****************************";
echo "<br>";
print_r(array_combine($sample1,$sample3));
echo "<br>";
print_r(array_merge($sample1,$sample3));
echo "<br>";
// $array1 = array("subject1" => "Python","subject2" => "sql"); 
  
  
// // Define array2 with keys and values 
// $array2 = array("subject1" => "c/c++","subject2" => "java"); 
  
// // Merge both array1 and array2 
// // $final = array_merge($array1, $array2); 
  
// // Display merged array 
// print_r($final); 
echo "******************************";
echo "<br>";

//The array_diff() function compares the values of two (or more) arrays, and returns the differences.
print_r(array_diff($sample2, $sample1, $sample3));
echo "<br>";
//The array_diff_assoc() function compares the keys and values of two (or more) arrays, and returns the differences.
print_r(array_diff_assoc($sample2, $sample1, $sample3));
echo "<br>";
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "h" => "green", "g" => "blue");

$result = array_diff_assoc($a1, $a2);
print_r($result);
echo "<br>";

//The array_fill_keys() function fills an array with values, specifying keys.
// $keys = array("a", "b", "c", "d");
// $a3 = array_fill_keys($keys, "blue", "green", "red", "black");
// print_r($a3);

//The array_filter() function filters the values of an array using a callback function
function test_odd($var)
  {
  return($var & 1);
  }

$a4=array(1,3,2,3,4);
print_r(array_filter($a4,"test_odd"))."<br>";

//The array_flip() function flips/exchanges all keys with their associated values in an array.
$a5=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a5);
print_r($result)."<br>";
echo "<br>";
//The array_intersect() function compares the values of two (or more) arrays, and returns the matches.

$resultOne=array_intersect($a1,$a2);
print_r($resultOne)."<br>";
echo "<br>";
//The array_pad() function inserts a specified number of elements, with a specified value, to an array.
$b=array("red","green");
print_r(array_pad($b,5,"blue"));
echo "<br>";

//The array_product() function calculates and returns the product of an array.

$c = array(4,9,1);
echo array_product($c);
echo "<br>";
//The array_product() function calculates and returns the sum of an array.
echo array_sum($c);
echo "<br>";

//The array_search() function search an array for a value and returns the key.
echo array_search("blue",$a5);
echo "<br>";

//The array_rand() function returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key.

print_r(array_rand($a5,3));
echo "<br>";

//The array_walk() function runs each array element in a user-defined function. The array's keys and values are parameters in the function.
function myfunction($value,$key)
{
echo "The key $key has the value $value<br>";
}
$d=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($d,"myfunction");
echo "<br>";
$num = "55";
var_dump($num);
$numOne = intval($num);
var_dump($numOne);