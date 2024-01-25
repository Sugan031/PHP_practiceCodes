<?php

$url = parse_url('https://www.w3resource.com/php-exercises/php-basic-exercises.php');

foreach($url as $key => $value){
    echo "$key => $value<br>";
}

echo "<br><br>";

// Define a text string
// $text = 'PHP Tutorial';

// // Use a regular expression to replace the first letter of each word with a span element with red color
// $text = preg_replace('/(\b[a-z])/i', '<span style="color:red;">\1</span>', $text);

// // Display the modified text with styled first letters
// echo $text;


?>