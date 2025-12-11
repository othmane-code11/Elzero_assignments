<?php
    $chars = ["o", "r", "e", "z", "l", "E"];

    $count = 0;
    foreach($chars as $c) {
        $count++;
    }
    $res = "";
    for ($i = 0; $i < $count;) {
        $i++;
        $res .= $chars[$count-$i];
    }
    echo ($res);
    // Output
    // "Elzero"