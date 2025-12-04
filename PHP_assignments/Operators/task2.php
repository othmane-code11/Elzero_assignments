<?php
    $a = "10";

    echo (int)$a . "<br>";
    echo gettype((int)$a) . "<br>";
    echo +$a . "<br>";
    echo gettype(+$a) . "<br>";
    echo 0+$a . "<br>";
    echo gettype(0+$a) . "<br>";

    // For The People Who Love Searching
    echo intval($a) . "<br>";
    echo gettype(intval($a)) . "<br>";
    echo $a++ . "<br>";
    echo gettype($a) . "<br>";