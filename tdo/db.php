<?php
    define('SERVER', 'localhost');
    define('USER', 'root');
    define('DB', 'test');
    define('PASSWORD', '');

    $conn = new mysqli(SERVER, USER, PASSWORD, DB);
    if ($conn->connect_error) {
        die ("L'erreur " + $conn->connect_error);
    }