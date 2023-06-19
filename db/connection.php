<?php
    // Database connection parameters
    $servername = "localhost";
    $username = "ftcbdcom_ftcbdcom";
    $password = "YS0LTsqJE3GB";
    $database = "ftcbdcom_ftc";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>