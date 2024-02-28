<?php
// $myObj = json_decode("sample.json");
// print_r($myObj);

// $myfile = fopen("sample.json", "r");
// echo fread($myfile,filesize("sample.json"))."<br>";
// fclose($myfile);
// $myobj = file_get_contents("sample.json");
// $myObjOne = json_decode($myobj, true);

// foreach ($myObjOne as $key => $value) {
//     echo "{$key} => {$value}<br>";
// }

// print_r($myObjOne);

// echo $myObjOne['name'];

$myfile = file_get_contents("sample.json");
$myfile = json_decode($myfile);
// echo $myfile;
print_r($myfile);

foreach($myfile as $value) {
    echo "<li>". $value->name ." " . $value->age . " " . $value->city ."</li><br>";
}
?>
