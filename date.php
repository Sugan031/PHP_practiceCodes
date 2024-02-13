<?php
// The required format parameter of the date() function specifies how to format the date (or time).

// Here are some characters that are commonly used for dates:

// d - Represents the day of the month (01 to 31)
// m - Represents a month (01 to 12)
// Y - Represents a year (in four digits)
// l (lowercase 'L') - Represents the day of the week
// Other characters, like"/", ".", or "-" can also be inserted between the characters to add additional formatting.
echo date("Y/m/d");
echo date("d/m/Y");
echo date("d-m/Y");

//     Get a Time
// Here are some characters that are commonly used for times:

// H - 24-hour format of an hour (00 to 23)
// h - 12-hour format of an hour with leading zeros (01 to 12)
// i - Minutes with leading zeros (00 to 59)
// s - Seconds with leading zeros (00 to 59)
// a - Lowercase Ante meridiem and Post meridiem (am or pm)


echo date("H:i:s a");
?>
