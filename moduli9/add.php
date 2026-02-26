<?php

include_once('config.php');

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $sqlQuery = $connect->prepare($sql);

    $sqlQuery->bindParam(':username', $username);
    $sqlQuery->bindParam(':password', $password);

    $sqlQuery->execute();

    echo "Data saved successfully";
}

?>