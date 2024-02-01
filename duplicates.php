<?php
// $string_1 = "AppleBananaOrange";
$stringArray = array("Apple", "Orange", "Orange", "Banana", "Apple", "Kiwi");
print_r($stringArray);
for ($i = 0; $i < count($stringArray); $i++) {
    for ($j = $i + 1; $j < count($stringArray); $j++) {
        if ($stringArray[$i] == $stringArray[$j]) {
            unset($stringArray[$j]);
        }
    }
}
echo "<br>";
print_r($stringArray);

$stringArray_1 = array("Apple", "Orange", "Orange", "Banana", "Apple", "Kiwi");

$newArray = array();

foreach ($stringArray_1 as $value) {
    if (!in_array($value, $newArray)) {
        array_push($newArray, $value);
    }
}
echo "<br>";
print_r($newArray);

$stringArray_2 = array("Apple", "Orange", "Orange", "Banana", "Apple", "Kiwi");

$uniqueArray = array_unique($stringArray_2);
echo "<br>";
print_r($uniqueArray);


// print_r($stringArray_2);
// for ($i = 0; $i < count($stringArray_2); $i++) {
//     for ($j = $i + 1; $j < count($stringArray_2); $j++) {
//         if ($stringArray_2[$i] == $stringArray_2[$j]) {
//             $pos = $j;
//             while($pos<(count($stringArray_2)-1)){
//                 $stringArray_2[$pos]=$stringArray_2[$pos+1];
//             }
//         }
//     }
// }
// echo "<br>";
// print_r($stringArray_2);


