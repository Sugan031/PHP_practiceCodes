<?php
//PHP filters are used to validate and sanitize external input.

// foreach (filter_list() as $key => $value) {
//     echo "$key => $value<br>";
// }
// foreach (filter_list() as $id => $filter) {
//     echo " $filter =>" . filter_id($filter) . "<br>";
// }

//The filter_var() function both validate and sanitize data.
$int = '1000';
//to check it is integer or not
if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
  } else {
    echo("Integer is not valid");
  }

//to check it is IP address or not
  $ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo("$ip is a valid IP address");
} else {
  echo("$ip is not a valid IP address");
}

//to check it is email or not
$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}


?>
