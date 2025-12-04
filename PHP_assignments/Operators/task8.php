<?php
    // Code 1
    $a = @$b || die("Error");

    // Code 2
    $f = @file("Not_A_File");

    // Code 3
    @include("Not_A_File");