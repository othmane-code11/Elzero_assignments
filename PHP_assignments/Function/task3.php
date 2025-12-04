<?php
    // Write Function Content Here
    function sum_all(...$n) {
        $res = 0;
        foreach ($n as $e) {
            if ($e != 5) {
                if ($e == 10) $res += 20; 
                else $res += $e;
            }
        }
        return $res;
    }
    // Needed Output
    echo sum_all(10, 12, 5, 6, 6, 10); // 64
    echo "<br>";
    echo sum_all(5, 10, 5, 10); // 40