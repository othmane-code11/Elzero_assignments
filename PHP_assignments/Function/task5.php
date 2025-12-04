<?php
    function check_status($a, $b, $c) {
        // Function Code Here
        if (gettype($a) == "string" && gettype($b) == "integer") {
            if ($c) echo "Hello $a, Your Age Is $b, You Are Available For Hire<br>";
            else echo "Hello $a, Your Age Is $b, You Are Not Available For Hire<br>";
        } else if (gettype($a) == "string" && gettype($c) == "integer") {
            if ($b) echo "Hello $a, Your Age Is $c, You Are Available For Hire<br>";
            else echo "Hello $a, Your Age Is $c, You Are Not Available For Hire<br>"; 
        } else if (gettype($b) == "string" && gettype($c) == "integer") {
            if ($a) echo "Hello $b, Your Age Is $c, You Are Available For Hire<br>";
            else echo "Hello $b, Your Age Is $c, You Are Not Available For Hire<br>"; 
        } else if (gettype($b) == "string" && gettype($a) == "integer") {
            if ($c) echo "Hello $b, Your Age Is $a, You Are Available For Hire<br>";
            else echo "Hello $b, Your Age Is $a, You Are Not Available For Hire<br>";
        } else if (gettype($c) == "string" && gettype($a) == "integer") {
            if ($b) echo "Hello $c, Your Age Is $a, You Are Available For Hire<br>";
            else echo "Hello $c, Your Age Is $a, You Are Not Available For Hire<br>"; 
        } else if (gettype($c) == "string" && gettype($b) == "integer") {
            if ($a) echo "Hello $c, Your Age Is $b, You Are Available For Hire<br>";
            else echo "Hello $c, Your Age Is $b, You Are Not Available For Hire<br>"; 
        }
    }
    // Needed Output
    echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"