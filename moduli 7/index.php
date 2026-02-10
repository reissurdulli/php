<?php
    $host='localhost';
    $user='root';
    $pass='';

    try {
        $conn = new PDO("mysql:host=$host" ,$user,$pass);
        $sql = "CREATE DATABASE testreis";
        $conn->exec($sql);
        echo "connected";
        echo "database created";
    } catch (Exeption $e) {
        echo "Not connected";
        echo "Database not created";
    }
?>