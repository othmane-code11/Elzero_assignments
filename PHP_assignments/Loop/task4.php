<?php
    $start = 10;
    $end = 0;
    $stop = 3;
    
    for ($i = $start; $i > $end; $i--) {
        echo ($i == $start) ? $i . "<br>" : "0$i<br>";
        if ($i == $stop) {
            break;
        }
    } 
    // Needed Output
    // 10
    // 09
    // 08
    // 07
    // 06
    // 05
    // 04
    // 03