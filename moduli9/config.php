<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'user';

try {
    $connect = new PDO("mysql:host=$server;dbname=$database", $username, $password);
} catch (Exception $e) {
    echo "Something went wrong";
}
?>