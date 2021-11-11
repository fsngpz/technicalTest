<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DB', 'technicalTest');

    $db_connect = mysqli_connect(HOST, USER, PASS, DB)
    or die ('Sorry, we are unable to do the connection');

    header('Content-Type: application/json');

?>