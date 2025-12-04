<?php
    // Write Function Content Here
    function get_arguments(...$n) {
        $res = "";
        foreach ($n as $e) {
            $res .= $e . " ";
        }
        $res .= "<br>";
        return $res;
    }
    // Needed Output
    echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
    echo get_arguments("I", "Love", "PHP"); // I Love PHP