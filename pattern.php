<?php
$n = 7;

for ($i = 0; $i < $n; $i++) {

    for ($j = 0; $j < $n; $j++) {
        if ($i == 0 || $j == 0 || $i == $j || $i == $n - 1 || $j == $n - 1||$i+$j==$n-1) {
            echo "*&nbsp ";
        } else {
            echo "&nbsp&nbsp ";
        }

    }
    echo "<br>\n";
}
echo "<br>";

$m = 7;

for ($i = 0; $i < $m; $i++) {

    for ($j = 0; $j < $m; $j++) {
        if ($i == 0 || $j == 0 || $i == $j || $i == $m - 1 || $j == $m - 1) {
            echo "*&nbsp ";
        } else {
            echo "&nbsp&nbsp ";
        }

    }
    echo "<br>";
}

echo "<br>";
?>
