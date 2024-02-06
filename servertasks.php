
<?php
print_r($_SERVER)."<br>";

echo $_SERVER['REMOTE_ADDR']."<br>";

echo "The browser is {$_SERVER['HTTP_USER_AGENT']}<br>";
echo "the current file name is {$_SERVER['PHP_SELF']}<br>";

$url = parse_url('https://www.w3resource.com/php-exercises/php-basic-exercises.php');

foreach ($url as $key => $value) {
    echo "$key => $value<br>";
}

echo "<br><br>";

$val = 'A0z';
echo ($val++." " .$val);
?>