<?php
    //The wordwrap() function wraps a string into new lines when it reaches a specific length.
    //wordwrap(string,width,break,cut)

    $str = "An example of a long word is: Supercalifragulistic";
    echo wordwrap($str,15,"<br>\n",true);
    echo("<br>");
    echo strlen("Supercalifragulistic");
    echo("<br>");
    //The addcslashes() function returns a string with backslashes in front of the specified characters.

    // $str = addcslashes("Hello World! this is me not you","n");
    $strZero = addcslashes("Hello World! this is me not you","a...g");
    echo($strZero);
    echo("<br>");



   // The addslashes() function returns a string with backslashes in front of predefined characters.

//    single quote (')
// double quote (")
// backslash (\)
// NULL

//addslashes(string)

$strOne = addslashes('What does "yolo" \mean?');
echo($strOne);
echo("<br>");

echo "************************";
echo("<br>");
//The chop() function removes whitespaces or other predefined characters from the right end of a string.
$word = "Heloo sanjeevoor";
echo chop($word,"nasevje oo");
echo("<br>");
echo "************************";

// Searches substring starting from index 5 
// and length 9 with all characters in char 
// list " for" 
echo strspn("Geeks for Geeks for"," for",5); 
echo("<br>");
//The chunk_split() function splits a string into a series of smaller parts.

$strTwo = "Hello world";
echo chunk_split($strTwo,2,",");

echo "<br>";

//The count_chars() function returns information about characters used in a string 

//count_chars(string,mode)

// mode	Optional. Specifies the return modes. 0 is default. The different return modes are:
//     0 - an array with the ASCII value as key and number of occurrences as value
//     1 - an array with the ASCII value as key and number of occurrences as value, only lists occurrences greater than zero
//     2 - an array with the ASCII value as key and number of occurrences as value, only lists occurrences equal to zero are listed
//     3 - a string with all the different characters used
//     4 - a string with all the unused characters

echo count_chars($strTwo,3);
print_r(count_chars($strTwo,0));

echo "<br>";
$string = "Hello, World!";

// Count the occurrences of each character in the string
$charCountArray = count_chars($string, 1);

// Display the result
foreach ($charCountArray as $asciiValue => $count) {
    $character = chr($asciiValue);
    echo "Character '$character' (ASCII $asciiValue) occurs $count times.\n";
}
echo "<br>";
print_r($charCountArray);
echo "<br>";

//The explode() function breaks a string into an array.

print_r(explode(",","one,two,three,four",2));
// print_r(explode(",","one,two,three,four"));
echo "<br>";

//The implode() function returns a string from the elements of an array.
echo implode(",",explode(",","one,two,three,four"));
echo "<br>";
//The join() function returns a string from the elements of an array.

// The join() function is an alias of the implode() function.
$arr = array('Hello','World!','Beautiful','Day!');
echo join(",",$arr);
echo "<br>";

//The number_format() function formats a number with grouped thousands.
//number_format(number,decimals,decimalpoint,separator)

echo number_format("1000000")."<br>";
echo number_format("1000000",2)."<br>";
echo number_format("1000000",2,".",",");
echo "<br>";

//The money_format() function returns a string formatted as a currency string.

// This function inserts a formatted number where there is a percent (%) sign in the main string.

$number = 1234.56;
setlocale(LC_MONETARY,"en_US");
// echo money_format("%i",$number);

//The parse_str() function parses a query string into variables.
// parse_str("name=Peter&age=43");
// echo $name."<br>";
// echo $age;
echo "<br>";
//The strcmp() function compares two strings.
echo strcmp("Hello world!","Hello world!");
echo "<br>";
//he strcasecmp() function compares two strings.

// Tip: The strcasecmp() function is binary-safe and case-insensitive.
echo strcasecmp("Hello world!","HELLO WORLD!");
echo "<br>";
//The strchr() function searches for the first occurrence of a string inside another string.
//strchr(string,search,before_search)
echo strchr("Hello world!","world",true);
echo "<br>";
//The strstr() function searches for the first occurrence of a string inside another string.
//strstr(string,search,before_search)

//The substr_compare() function compares two strings from a specified start position.
echo substr_compare("Hello world","Hello world",0);
echo "<br>";

//The str_word_count() function counts the number of words in a string.





$str = "Hello World!";
echo $str . "<br>";
echo rtrim($str,"World!");
echo "<br>";


$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello ");
echo "<br>";

$str = "Hello World!";
echo $str . "<br>";
echo chop($str,"World!");
echo "<br>";

?>
