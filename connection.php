<?php
    $dbServerName = 'localhost';
    $dbUserName = 'username';
    $dbPassword = 'password';
    $dbName = 'projeto_web';
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