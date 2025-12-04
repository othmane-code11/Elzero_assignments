<?php
    // Write Function Content Here
    function multiply(...$args) {
        $res = 1;
        foreach ($args as $a) {
            if (gettype($a) != "string") {
                $res *= (int)$a;
            }
        }
        return $res;
    }

    // Needed Output
    echo multiply(10, 20); // 200
    echo "<br>";
    echo multiply("A", 10, 30); // 300
    echo "<br>";
    echo multiply(100.5, 10, "B"); // 1000