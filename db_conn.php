<?php

$sname = "localhost";
$uname = "root";
$password = "root";
$port = 3307;

$db_name = "my_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name, $port);

    if (!$conn) {
        echo "Connection failed!!";
    }