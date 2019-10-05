<?php

function connection()
{
    $dbServer = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = "biodb";

    $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

    if (!$conn)
        die('Connection Failed: '.mysqli_error());

    // mysqli_select_db($conn, $dbName);

    return $conn;
}
?>
