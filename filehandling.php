<?php
$myfile = fopen("sample.txt", "r");
//    echo fread($myfile,filesize("sample.txt"))."<br>";
echo filesize("sample.txt") . "<br>";
//    echo fgets($myfile);
// echo fgetc($myfile);
while (!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
fclose($myfile);
//  $file = fopen("sample.txt","a");
//  $textLine ="CSS = Cascading Style Sheets\n
//  HTML = Hyper Text Markup Language\n
//  PHP = PHP Hypertext Preprocessor\n
//  SQL = Structured Query Language\n
//  SVG = Scalable Vector Graphics\n
//  XML = EXtensible Markup Language\n";
//  fwrite($file, $textLine);

//  fclose($file);
