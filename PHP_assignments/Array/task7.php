<?php
    $names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

    // Write Line Here
    // Write Line Here
    next($names);
    next($names);
    echo current($names) . "<br>"; // "Sayed"
    
    end($names);
    // Write Line Here
    
    echo current($names) . "<br>"; // "Ali"
    
    // Write Line Here
    reset($names);
    echo current($names) . "<br>"; // "Osama"
    
    end($names);
    prev($names);
    // Write Line Here
    // Write Line Here
    
    echo current($names) . "<br>"; // "Mahmoud"