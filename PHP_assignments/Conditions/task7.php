<?php
    $num_one = 23;
    $num_two = 5;
    $op = "-";

    if ($op == "+") {
        echo $num_one + $num_two . "<br>";
    } else if ($op == "-") {
        echo $num_one - $num_two . "<br>";
    } else if ($op == "*") {
        echo $num_one * $num_two . "<br>";
    } else if ($op == "/") {
        echo (int)($num_one / $num_two) . "<br>";
        echo $num_one % $num_two . "<br>";
    } else {
        echo "Unknown Operation";
    }