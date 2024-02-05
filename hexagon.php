<?php

    $n = 7;
    $l = 2 * $n - 1;
    for ($i = 0; $i < $n; $i++) {
        $elem = $i + $n;

        for ($k = 0; $k < $elem; $k++) {
            // prints the star
            if (($k == $n + $i - 1) ||
                ($k == $n - $i - 1)) {
                echo "*";
            } else {
                echo "&nbsp";
            }

        }
        echo "<br>";
    }

    for ($m = 0; $m < $n - 2; $m++) {
        for ($j = 0; $j < $l; $j++) {
            if ($j == 0 || $j == $l - 1) {
                echo "*";
            } else {
                echo "&nbsp";
            }

        }
        echo "<br>";
    }

    $r = $n - 1;
    for ($h = $r; $h >= 0; $h--) {
        $elem = $h + $n;
        for ($k = 0; $k < $elem; $k++) {
            if (($k == $n + $h - 1) ||
                ($k == $n - $h - 1)) {
                echo "*";
            } else {
                echo "&nbsp";
            }

        }
        echo "<br>";
}
