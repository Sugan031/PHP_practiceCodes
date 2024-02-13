<?php
$stringArray_2 = array("Apple", "Orange", "Orange", "Banana", "Apple", "Kiwi");
// print_r($stringArray_2);
for ($i = 0; $i < count($stringArray_2); $i++) {
    if ($stringArray_2[$i] != "") {
        for ($j = $i + 1; $j < count($stringArray_2); $j++) {
            if ($stringArray_2[$i] == $stringArray_2[$j]) {

                $pos = $j;
                while ($pos < (count($stringArray_2) - 1)) {
                    $stringArray_2[$pos] = $stringArray_2[$pos + 1];
                }
            }
        }
    }
}
echo "<br>";
print_r($stringArray_2);
