<?php
    $mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

    echo "<pre>";
    print_r(array_slice(array_filter($mix, fn($m) => gettype($m) != "string" && $m % 2 != 0), 0, count($mix), false));
    echo "</pre>";
    // Output
    // Array
    // (
    //   [0] => 1
    //   [1] => 3
    //   [2] => 5
    //   [3] => 7
    // )