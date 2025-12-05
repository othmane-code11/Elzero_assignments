<?php
    $nums = [10, 20, 30];

    echo array_sum($nums);
    echo array_reduce($nums, fn($n, $m) => $n + $m);
    // Output
    // 60
    // 60