<?php
    // Write Function Content Here
    // Anonymous function
    $greet = function ($n) {
        return "Greetings";
    };

    // Arrow function
    $greet = fn($n) => "Greetings";
    // Needed Output
    echo $greet("Osama"); // Greetings