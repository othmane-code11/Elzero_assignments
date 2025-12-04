<?php
    $mix = [1, 2, "A", "B", "C", 3, 4];

    $n = 0;
    $l = 0;
    for ($i = 0; $i < count($mix); $i++) {
        if (gettype($mix[$i]) == "integer") {
            echo $mix[$i] . "<br>";
            $n++;
        }
        else {
            $l++;
        }
    }
    echo "$n Numbers Printed!<br>";
    echo "$l Letters Ignored!<br>";
    // Output
    // 1
    // 2
    // 3
    // 4
    // "4 Numbers Printed"
    // "3 Letters Ignored"