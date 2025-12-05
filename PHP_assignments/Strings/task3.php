<?php
    $str = 'aAa';
    $num = 3;
    $char = "_";
    
    // Write Your Code Here
    echo str_repeat(substr_replace(strtolower($str), $char, $num), 3);
    // aaa_aaa_aaa_