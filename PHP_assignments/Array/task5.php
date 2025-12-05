<?php
    $nums = [5, 10, 20, 5, 30, 40];

    $res = 0;
    foreach ($nums as $n) {
        if ($n != 5) $res += (int)$n;
    }
    echo $res;
    // Output
    // 100