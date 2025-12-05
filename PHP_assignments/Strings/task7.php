<?php
    $chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
    $res = "";
    foreach ($chars as $c) {
        if (gettype($c) != "integer") $res .= strtolower($c);
    }
    echo ucfirst($res);
    // Output
    // "Elzero"