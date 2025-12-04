<?php
    $index = 0;
    // While
    while ($index < 20) {
        $index++;
        if ($index % 2 == 0) {
            echo $index . "<br>";
        }
    }
    // For
    $index = 0;
    for (; $index <= 20;) {
        $index++;
        if ($index % 2 == 0) {
            echo $index . "<br>";
        }
    }
    // // Do While
    $index = 0;
    do {
        $index++;
        if ($index % 2 == 0) {
            echo $index . "<br>";
        }
    } while ($index < 20);