<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'Harry');
    define('DB_PASS', '123456');
    define('DB_NAME', 'php_dev');

    // create connection using mysqli, simple but limted to mysql
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // check connection and output message if wrong
    if($conn->connect_error) {
        die('Connection Failed ' . $conn->connect_error);
    }