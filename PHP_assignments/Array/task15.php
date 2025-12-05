<?php
    $chars = ["o", "r", "e", "z", "l", "E"];

    $res = "";
    for ($i = count($chars); $i > 0;) {
        $i--;
        $res .= $chars[$i];
    }
    echo $res;
    // Output
    // "Elzero"