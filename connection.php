<?php
    $dbServerName = 'localhost';
    $dbUserName = 'root';
    $dbPassword = 'root';
    $dbName = 'projeto_formy';
    $connection = new mysqli($dbServerName, $dbUserName, $dbPassword, $dbName);
    if($connection->connect_error) {
        echo "$connection->connect_error";
        echo "$dbServerName";
        echo "$dbUserName";
        echo "$dbPassword";
        echo "$dbName";
        die("Connection failed: " . $connection->connect_error);
    };
?>