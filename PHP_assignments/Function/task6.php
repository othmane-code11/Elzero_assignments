<?php
    // Write Function Content Here
    function calculate($a, $b, $op="a") {
        if (strtolower($op) == "a" || (strtolower($op[0]) == "a" && strtolower($op) == "add")){
            return $a + $b;
        } else if (strtolower($op) == "s" || (strtolower($op[0]) == "s" && strtolower($op) == "subtract")) {
            return $a - $b;
        } else if (strtolower($op) == "m" || (strtolower($op[0]) == "m" && strtolower($op) == "multiply")) {
            return $a * $b;
        }
    }
    // Needed Output
    echo calculate(10, 20); // 30
    echo "<br>";
    echo calculate(10, 20, "a"); // 30
    echo "<br>";
    echo calculate(10, 20, "s"); // -10
    echo "<br>";
    echo calculate(10, 20, "subtract"); // -10
    echo "<br>";
    echo calculate(10, 20, "multiply"); // 200
    echo "<br>";
    echo calculate(10, 20, "m"); // 200