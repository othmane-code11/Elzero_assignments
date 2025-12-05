<?php
    $nums = [11, 2, 10, 7, 20, 50];

    $res = 0;
    foreach($nums as $n) {
        $res += $n;
    }
    echo $res;
    // Output
    // 100