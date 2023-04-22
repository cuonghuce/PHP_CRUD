<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "myshop";

    //create connection
    $connection = new mysqli($servername, $username, $password, $database);

    //check connect
    if($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
?>