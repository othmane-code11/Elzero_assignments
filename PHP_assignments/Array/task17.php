<?php
    $nums = [1, 2, 3, 4, 5, 6];

    // Output
    // Every Time The Array Elements Will Be Shuffled
    $arr_shuffle = [];
    for ($i = 0; $i < count($nums); $i++) {
        $j = rand(0, count($nums) - 1);
        if (!in_array($nums[$j], $arr_shuffle)) {
            array_push($arr_shuffle, $nums[$j]);
        } else {
            $i--;
        }
    }
    echo "<pre>";
    print_r($arr_shuffle);
    echo "</pre>";
    // Example 1
    // Array
    // (
    //   [0] => 5
    //   [1] => 1
    //   [2] => 6
    //   [3] => 2
    //   [4] => 4
    //   [5] => 3
    // )
    
    // Example 2
    // Array
    // (
    //   [0] => 4
    //   [1] => 3
    //   [2] => 6
    //   [3] => 1
    //   [4] => 5
    //   [5] => 2
    // )