<?php
    $start = 0;
    $mix = [1, 2, 3, "A", "B", "C", 4];
    
    for ($i = $mix[$start]; $i < count($mix); $i++) {
        if (gettype($mix[$i]) == 'integer') {
            echo $mix[$i] . "<br>";
        } 
    }
    // Output
    // 2
    // 3
    // 4