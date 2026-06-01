<?php 
    $points = 10;
    $t = +true;
    // Write Your Code Here
    $points += $points / ++$t - $t;
    echo $points . "<br>"; // 13

    // Write Your Code Here
    $points -= ++$points / $t - --$t;
    echo $points; // 8;
